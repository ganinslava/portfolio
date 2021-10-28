import classnames from 'classnames';
import './editor.scss';

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {InspectorControls, MediaUpload, MediaUploadCheck, RichText} = wp.editor;
const {InnerBlocks} = wp.blockEditor;
const {PanelBody, PanelRow, TextControl, Button, Dashicon} = wp.components;


wp.blocks.registerBlockType('arsha/section-why-us', {
    // Заголовок/название блока
    title: __('Секция Why Us', 'arsha'),
    // Описание блока
    description: __(
        'Тег section с id="why-us". Внутри section находится div.container-fluid. Внутри заголовок, текст и неупорядоченный список выпадающих элементов (аккордеон).',
        'arsha'
    ),

    // Категория блока (common, formatting, layout, widgets, embed).
    category: 'common',

    supports: {
        html: false
    },

    attributes: {
        main_title: {
            type: 'array',
            source: 'children',
            selector: '.title-ph'
        },
        main_text: {
            type: 'array',
            source: 'children',
            selector: '.main-text-ph'
        },
        img_ID: {
            type: 'number'
        },
        img_URL: {
            type: 'string',
            property: 'background-image',
            selector: '.img-ph'
        }
    },

    edit: props => {
        const { className } = props;

        const select_img = (img) => {
            props.setAttributes({
                img_ID: img.id,
                img_URL: 'url("' + img.url + '")'
            })
        };

        const remove_img = () => {
            props.setAttributes({
                img_ID: null,
                img_URL: null
            })
        };

        return [
            <InspectorControls>
                <PanelBody title={__('Настройки блока', 'arsha')}>
                    {/*Компонент PanelRow позаботится о разделении пространством содержимого внутри тела панели.*/}
                    <PanelRow>
                        <p>{__('Настройте содержимое вашего блока.', 'arsha')}</p>
                    </PanelRow>

                    {props.attributes.img_ID ? (
                        <div>
                            <p>Загрузите/выберите изображение</p>
                            <div className="image-ctr">
                                <div className={classnames('col-lg-5', 'align-items-stretch', 'order-1', 'order-lg-2', 'img')}
                                     style={{backgroundImage: props.attributes.img_URL, height: "100px", backgroundSize: "cover"}} data-aos="zoom-in"
                                     data-aos-delay="150">
                                </div>

                                {props.isSelected ? (
                                    <Button className="btn-remove" onClick={remove_img}>
                                        <Dashicon icon='no' size="20" />
                                    </Button>
                                ) : null}
                            </div>
                        </div>
                    ) : (

                        <MediaUploadCheck>
                            <p>Загрузите/выберите изображение</p>
                            <MediaUpload
                                allowedType={['image']}
                                value={props.attributes.img_ID}
                                onSelect={select_img}
                                render={({open}) => (
                                    <Button className={"button button-large"} onClick={open}>
                                        {__('Upload Image', 'recipe')}
                                    </Button>
                                )}
                            ></MediaUpload>
                        </MediaUploadCheck>
                    )}
                </PanelBody>
            </InspectorControls>,

            <h2>Секция Why Us (этот заголовок не отображается в публичной части сайта)</h2>,
            <section id="why-us" className={classnames('why-us', 'section-bg')}>
                <div className="container-fluid" data-aos="fade-up">
                    <div className="row">
                        <div className={classnames('col-lg-7', 'd-flex', 'flex-column', 'justify-content-center', 'align-items-stretch', 'order-2', 'order-lg-1')}>
                            <div className="content">
                                <RichText
                                    tagName="h3"
                                    placeholder={__('Добавьте главный заголовок секции.', 'arsha')}
                                    onChange={(new_val) => {
                                        props.setAttributes({main_title: new_val});
                                    }}
                                    value={props.attributes.main_title}
                                />
                                <RichText
                                    tagName="div"
                                    multiline="p"
                                    placeholder={__('Добавьте текст основной секции.', 'arsha')}
                                    onChange={(new_val) => {
                                        props.setAttributes({main_text: new_val});
                                    }}
                                    value={props.attributes.main_text}
                                />
                            </div>
                            <div className="accordion-list">
                                <h5>Неупорядоченный список "аккордеона".</h5>
                                <ul>
                                    <InnerBlocks
                                        allowedBlocks={['arsha/why-us-li']}
                                    />
                                </ul>
                            </div>
                        </div>
                        <div className={classnames('col-lg-5')}
                             style={{backgroundImage: props.attributes.img_URL, height: "200px", backgroundSize: "cover"}} data-aos="zoom-in"
                             data-aos-delay="150">&nbsp;
                        </div>
                    </div>
                </div>
            </section>
        ];
    },
    save: props => {
        return (
            <section id="why-us" className={classnames('why-us', 'section-bg')}>
                <div className="container-fluid" data-aos="fade-up">
                    <div className="row">
                        <div
                            className={classnames('col-lg-7', 'd-flex', 'flex-column', 'justify-content-center', 'align-items-stretch', 'order-2', 'order-lg-1')}>
                            <div className="content">
                                <h3 className="title-ph">{props.attributes.main_title}</h3>
                                <div className="main-text-ph">{props.attributes.main_text}</div>
                            </div>
                            <div className="accordion-list">
                                <ul>
                                    <InnerBlocks.Content />
                                </ul>
                            </div>
                        </div>
                        <div className={classnames('col-lg-5', 'align-items-stretch', 'order-1', 'order-lg-2', 'img', 'img-ph')}
                             style={{backgroundImage: props.attributes.img_URL}} data-aos="zoom-in"
                             data-aos-delay="150">&nbsp;
                        </div>
                    </div>
                </div>
            </section>
        );
    }
});

