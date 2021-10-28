import classnames from 'classnames';

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {InspectorControls, RichText} = wp.editor;
const {PanelBody, PanelRow, TextControl} = wp.components;

wp.blocks.registerBlockType('arsha/why-us-li', {
    // Заголовок/название блока
    title: __('Элемент неупорядоченного списка секции Why Us', 'arsha'),
    // Описание блока
    description: __(
        'Тег li с разметкой для создания выпадающих табов "аккордеона".',
        'arsha'
    ),

    // Категория блока (common, formatting, layout, widgets, embed).
    category: 'common',

    supports: {
        html: false
    },

    attributes: {
        li_text: {
            type: 'array',
            source: 'children',
            selector: '.li-text-ph'
        },
        li_title: {
            type: 'string',
            source: 'text',
            selector: '.li-title-ph'
        },
        li_target: {
            type: 'string',
            source: 'attribute',
            attribute: 'data-bs-target',
            selector: 'a'
        },
        li_num: {
            type: 'string',
            source: 'text',
            selector: 'span'
        },
        li_id: {
            type: 'string',
            source: 'attribute',
            attribute: 'id',
            selector: 'div'
        },
        li_counter: {
            type: 'integer'
        }
    },

    edit: props => {

        return [
            <li>
                <a data-bs-toggle="collapse" className="collapse" data-bs-target="#accordion-list-1">
                    <span>01</span>
                    <span className="li-title-ph">
                        <TextControl
                            label={__('Заголовок элемента', 'arsha')}
                            help={__('', 'arsha')}
                            value={props.attributes.li_title}
                            onChange={(new_val) => {
                                props.setAttributes({li_title: new_val})
                            }}
                        />
                    </span>
                    <i className={classnames('bx', 'bx-chevron-down', 'icon-show')}></i>
                    <i className={classnames('bx', 'bx-chevron-up', 'icon-close')}></i></a>
                <div id="accordion-list-1" className={classnames('collapse', 'show')} data-bs-parent=".accordion-list">
                    <RichText
                        tagName="div"
                        multiline="p"
                        placeholder={__('Добавьте основной текст элемента.', 'arsha')}
                        onChange={(new_val) => {
                            props.setAttributes({li_text: new_val});
                        }}
                        value={props.attributes.li_text}
                    />
                </div>
            </li>
        ];
    },
    save: props => {
        return (
            <li>
                <a data-bs-toggle="collapse" className="collapse" data-bs-target="#accordion-list-1">
                    <span>01</span><span className="li-title-ph">{props.attributes.li_title}</span>
                    <i className={classnames('bx', 'bx-chevron-down', 'icon-show')}></i>
                    <i className={classnames('bx', 'bx-chevron-up', 'icon-close')}></i>
                </a>

                <div id="accordeon-list-1" className={classnames('collapse', 'show', 'li-text-ph')}  data-bs-parent=".accordion-list">
                    {props.attributes.li_text}
                </div>
            </li>
        );
    }
});
