import classnames from 'classnames';
import './editor.scss';

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {InspectorControls, BlockControls, MediaUpload, MediaUploadCheck} = wp.editor;
const {PanelBody, PanelRow, TextControl, Button, Dashicon} = wp.components;



wp.blocks.registerBlockType('arsha/section-first', {
    // Заголовок/название блока
    title: __('Первая секция', 'arsha'),
    // Описание блока
    description: __(
        'Тег section с id="hero" и классами "d-flex align-items-center". Внутри section находится div.container, внутри которого находится div.row',
        'arsha'
    ),

    // Категория блока (common, formatting, layout, widgets, embed).
    category: 'common',
    // icon: block_icons.wapuu,
    // keywords: [
    //     __('Food', 'recipe'),
    //     __('Ingredients', 'recipe'),
    //     __('Meal Type', 'recipe'),
    // ],

    supports: {
        html: false
    },

    attributes: {
        main_title: {
            type: 'string',
            source: 'text',
            selector: '.main-title-ph',
            default: 'Better Solutions For Your Business'
        },
        second_title: {
            type: 'string',
            source: 'text',
            selector: '.second-title-ph',
            default: 'We are team of talented designers making websites with Bootstrap'
        },
        button_text: {
            type: 'string',
            source: 'text',
            selector: '.button-text-ph',
            default: 'Get Started'
        },
        video_link: {
            type: 'string',
            source: 'attribute',
            attribute: 'href',
            selector: '.video-link-ph',
            default: 'https://www.youtube.com/watch?v=H0WktqMIk1Y'
        },
        video_link_text: {
            type: 'string',
            source: 'text',
            selector: '.video-link-ph',
            default: 'Watch Video'
        },
        img_ID: {
            type: 'number'
        },
        img_URL: {
            type: 'string',
            source: 'attribute',
            attribute: 'src',
            selector: '.img-ph'
        }
    },

    edit: props => {
        const { className } = props;

        const select_img = (img) => {
            props.setAttributes({
                img_ID: img.id,
                img_URL: img.url
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

                    <TextControl
                        label={__('Главный заголовок (H1)', 'arsha')}
                        help={__('', 'arsha')}
                        value={props.attributes.main_title}
                        onChange={(new_val) => {
                            props.setAttributes({main_title: new_val})
                        }}
                    />

                    <TextControl
                        label={__('Заголовок под Главным (H2)', 'arsha')}
                        help={__('', 'arsha')}
                        value={props.attributes.second_title}
                        onChange={(new_val) => {
                            props.setAttributes({second_title: new_val})
                        }}
                    />

                    <TextControl
                        label={__('Текст кнопки', 'arsha')}
                        help={__('', 'arsha')}
                        value={props.attributes.button_text}
                        onChange={(new_val) => {
                            props.setAttributes({button_text: new_val})
                        }}
                    />

                    <TextControl
                        label={__('Ссылка на YouTube видео', 'arsha')}
                        help={__('', 'arsha')}
                        value={props.attributes.video_link}
                        onChange={(new_val) => {
                            props.setAttributes({video_link: new_val})
                        }}
                    />

                    <TextControl
                        label={__('Текст кнопки просмотра видео', 'arsha')}
                        help={__('', 'arsha')}
                        value={props.attributes.video_link_text}
                        onChange={(new_val) => {
                            props.setAttributes({video_link_text: new_val})
                        }}
                    />

                    {props.attributes.img_ID ? (
                        <div>
                            <p>Загрузите/выберите изображение</p>
                            <div className="image-ctr">
                                <img className="img-ph" src={props.attributes.img_URL}
                                     alt=""/>

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
                    )};
                </PanelBody>
            </InspectorControls>,

            <h2>Первая секция (этот заголовок не отображается в публичной части сайта)</h2>,
            <section id="hero" className={classnames(
                'd-flex',
                'align-items-center'
            )}>
                <div className="container">
                    <div className="row">
                        <div className={classnames(
                            'col-lg-6',
                            'd-flex',
                            'flex-column',
                            'justify-content-center',
                            'pt-4',
                            'pt-lg-0',
                            'order-2',
                            'order-lg-1'
                        )} data-aos="fade-up" data-aos-delay="200">
                            <h1 className="main-title-ph">{props.attributes.main_title}</h1>
                            <h2 className="second-title-ph">{props.attributes.second_title}</h2>
                            <div className={classnames(
                                'd-flex',
                                'justify-content-center',
                                'justify-content-lg-start'
                            )}>
                                <a href="#about" className={classnames(
                                    'btn-get-started',
                                    'scrollto',
                                    'button-text-ph'
                                )}>{props.attributes.button_text}</a>
                                <a className={classnames(
                                    'glightbox',
                                    'btn-watch-video',
                                    'video-link-ph'
                                )} href={props.attributes.video_link}>
                                    <i className="bi bi-play-circle"></i>
                                    <span className="video-link-text-ph">{props.attributes.video_link_text}</span>
                                </a>
                            </div>
                        </div>
                        <div className={classnames(
                            'col-lg-6',
                            'order-1',
                            'order-lg-2',
                            'hero-img'
                        )} data-aos="zoom-in" data-aos-delay="200">
                            <img src={props.attributes.img_URL} className={classnames('img-fluid', 'animated', 'img-ph')} alt=""/>
                        </div>
                    </div>
                </div>
            </section>
        ];
    },
    save: props => {
        return (
            <section id="hero" className={classnames(
                'd-flex',
                'align-items-center'
            )}>
                <div className="container">
                    <div className="row">
                        <div className={classnames(
                            'col-lg-6',
                            'd-flex',
                            'flex-column',
                            'justify-content-center',
                            'pt-4',
                            'pt-lg-0',
                            'order-2',
                            'order-lg-1'
                        )} data-aos="fade-up" data-aos-delay="200">
                            <h1 className="main-title-ph">{props.attributes.main_title}</h1>
                            <h2 className="second-title-ph">{props.attributes.second_title}</h2>
                            <div className={classnames(
                                'd-flex',
                                'justify-content-center',
                                'justify-content-lg-start'
                            )}>
                                <a href="#about" className={classnames(
                                    'btn-get-started',
                                    'scrollto',
                                    'button-text-ph'
                                )}>{props.attributes.button_text}</a>
                                <a className={classnames(
                                    'glightbox',
                                    'btn-watch-video',
                                    'video-link-ph'
                                )} href={props.attributes.video_link}>
                                    <i className="bi bi-play-circle"></i>
                                    <span className="video-link-text-ph">{props.attributes.video_link_text}</span>
                                </a>
                            </div>
                        </div>
                        <div className={classnames(
                            'col-lg-6',
                            'order-1',
                            'order-lg-2',
                            'hero-img'
                        )} data-aos="zoom-in" data-aos-delay="200">
                            <img src={props.attributes.img_URL} className={classnames('img-fluid', 'animated', 'img-ph')} alt=""/>
                        </div>
                    </div>
                </div>
            </section>
        );
    }
});
