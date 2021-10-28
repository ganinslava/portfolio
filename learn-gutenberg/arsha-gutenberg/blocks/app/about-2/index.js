import classnames from 'classnames';

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {InspectorControls} = wp.editor;
const {InnerBlocks} = wp.blockEditor;
const {PanelBody, PanelRow, TextControl} = wp.components;



wp.blocks.registerBlockType('arsha/about-2', {
    // Заголовок/название блока
    title: __('Подраздел About-2', 'arsha'),
    // Описание блока
    description: __(
        'Тег div с классами "col-lg-6 pt-4 pt-lg-0". Внутри параграф (или несколько текста) и ссылка в виде кнопки.',
        'arsha'
    ),

    // Категория блока (common, formatting, layout, widgets, embed).
    category: 'common',

    supports: {
        html: false
    },

    attributes: {
        button_text: {
            type: 'string',
            source: 'text',
            selector: '.button-link-ph',
            default: 'Learn More'
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
                        label={__('Текст кнопки', 'arsha')}
                        help={__('', 'arsha')}
                        value={props.attributes.button_text}
                        onChange={(new_val) => {
                            props.setAttributes({button_text: new_val})
                        }}
                    />
                </PanelBody>
            </InspectorControls>,

            <h3>Подраздел About-2</h3>,
            <div className={classnames('col-lg-6', 'pt-4', 'pt-lg-0')}>
                <h5>Основной текст</h5>
                <InnerBlocks
                    allowedBlocks={['core/paragraph']}
                />
                <h5>Кнопка</h5>
                <a href="#" className={classnames('btn-learn-more', 'button-link-ph')}>{props.attributes.button_text}</a>
            </div>
        ];
    },
    save: props => {
        return (

                <div className={classnames('col-lg-6', 'pt-4', 'pt-lg-0')}>
                    <InnerBlocks.Content />
                    <a href="#" className={classnames('btn-learn-more', 'button-link-ph')}>{props.attributes.button_text}</a>
                </div>
        );
    }
});
