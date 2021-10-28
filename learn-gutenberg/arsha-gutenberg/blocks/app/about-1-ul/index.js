import classnames from 'classnames';

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {InspectorControls} = wp.editor;
const {InnerBlocks} = wp.blockEditor;
const {PanelBody, PanelRow} = wp.components;



wp.blocks.registerBlockType('arsha/about-1-ul', {
    // Заголовок/название блока
    title: __('Неупорядоченный список', 'arsha'),
    // Описание блока
    description: __(
        'Тег неупорядоченного списка подраздела About-1.',
        'arsha'
    ),

    // Категория блока (common, formatting, layout, widgets, embed).
    category: 'common',

    supports: {
        html: false
    },

    attributes: {

    },


    edit: props => {
        const { className } = props;
        return [
            <h3>Неупорядоченный список подраздела About-1</h3>,
            <ul>
                <InnerBlocks
                    allowedBlocks={['arsha/about-1-li']}
                />
            </ul>
        ];
    },
    save: props => {
        return (
            <ul>
                <InnerBlocks.Content />
            </ul>
        );
    }
});
