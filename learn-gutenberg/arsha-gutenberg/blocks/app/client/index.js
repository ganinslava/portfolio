import classnames from 'classnames';
import './editor.scss';

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {InspectorControls, MediaUpload, MediaUploadCheck} = wp.editor;
const {PanelBody, PanelRow, Button, Dashicon} = wp.components;



wp.blocks.registerBlockType('arsha/client', {
    // Заголовок/название блока
    title: __('Клиент сайта', 'arsha'),

    // Описание блока
    description: __(
        'Клиент сайта. Тег div с тегом img внутри.',
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

            <h2>Клиент</h2>,
            <div className={classnames(
                'col-lg-2',
                'col-md-4',
                'col-6',
                'd-flex',
                'align-items-center',
                'justify-content-center'
            )}>
                <img src={props.attributes.img_URL} className={classnames('img-fluid', 'img-ph')} alt="" />
            </div>

        ];
    },
    save: props => {
        return (
            <div className={classnames(
                'col-lg-2',
                'col-md-4',
                'col-6',
                'd-flex',
                'align-items-center',
                'justify-content-center'
            )}>
                <img src={props.attributes.img_URL} className={classnames('img-fluid', 'img-ph')} alt="" />
            </div>
        );
    }
});
