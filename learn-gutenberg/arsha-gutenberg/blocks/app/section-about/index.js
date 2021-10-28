import classnames from 'classnames';

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {InspectorControls} = wp.editor;
const {InnerBlocks} = wp.blockEditor;
const {PanelBody, PanelRow, TextControl} = wp.components;



wp.blocks.registerBlockType('arsha/section-about', {
    // Заголовок/название блока
    title: __('Секция About', 'arsha'),
    // Описание блока
    description: __(
        'Тег section с id="about". Внутри section находится div.container. Внутри заголовок и вложенные блоки.',
        'arsha'
    ),

    // Категория блока (common, formatting, layout, widgets, embed).
    category: 'common',

    supports: {
        html: false
    },

    attributes: {
        main_title: {
            type: 'string',
            source: 'text',
            selector: 'title-ph',
            default: 'About Us'
        }
    },


    edit: props => {
        const { className } = props;
        return [
            <InspectorControls>
                <PanelBody title={__('Настройки блока', 'arsha')}>
                    {/*Компонент PanelRow позаботится о разделении пространством содержимого внутри тела панели.*/}
                    <PanelRow>
                        <p>{__('Настройте содержимое вашего блока.', 'arsha')}</p>
                    </PanelRow>

                    <TextControl
                        label={__('Главный заголовок секции (H2)', 'arsha')}
                        help={__('', 'arsha')}
                        value={props.attributes.main_title}
                        onChange={(new_val) => {
                            props.setAttributes({main_title: new_val})
                        }}
                    />
                </PanelBody>
            </InspectorControls>,

            <h2>Секция About (этот заголовок не отображается в публичной части сайта)</h2>,
            <section id="about" className="about">
                <div className="container" data-aos="fade-up">
                    <div className="section-title">
                        <h2 className="title-ph">{props.attributes.main_title}</h2>
                    </div>
                    <div className={classnames('row', 'content')}>
                        <InnerBlocks
                            allowedBlocks={['arsha/about-1', 'arsha/about-2']}
                        />
                    </div>
                </div>
            </section>

        ];
    },
    save: props => {
        return (
            <section id="about" className="about">
                <div className="container" data-aos="fade-up">
                    <div className="section-title">
                        <h2 className="title-ph">{props.attributes.main_title}</h2>
                    </div>
                    <div className={classnames('row', 'content')}>
                        <InnerBlocks.Content />
                    </div>
                </div>
            </section>
        );
    }
});
