import classnames from 'classnames';

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {InspectorControls} = wp.editor;
const {PanelBody, PanelRow, TextControl} = wp.components;



wp.blocks.registerBlockType('arsha/about-1-li', {
    // Заголовок/название блока
    title: __('Элемент неупорядоченного списка подраздела About-1', 'arsha'),
    // Описание блока
    description: __(
        'Тег li с иконкой и текстом внутри.',
        'arsha'
    ),

    // Категория блока (common, formatting, layout, widgets, embed).
    category: 'common',

    supports: {
        html: false
    },

    attributes: {
        li_text: {
            type: 'string',
            source: 'text',
            selector: '.li-ph',
            default: 'Ullamco laboris nisi ut aliquip ex ea commodo consequat'
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
                        label={__('Текст элемента списка', 'arsha')}
                        help={__('', 'arsha')}
                        value={props.attributes.li_text}
                        onChange={(new_val) => {
                            props.setAttributes({li_text: new_val})
                        }}
                    />
                </PanelBody>
            </InspectorControls>,
            <li className="li-ph"><i className="ri-check-double-line"></i>{props.attributes.li_text}</li>
        ];
    },
    save: props => {
        return (
            <li className="li-ph"><i className="ri-check-double-line"></i>{props.attributes.li_text}</li>
        );
    }
});
