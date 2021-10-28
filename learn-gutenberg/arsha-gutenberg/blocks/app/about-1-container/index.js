import classnames from 'classnames';

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {InspectorControls} = wp.editor;
const {InnerBlocks} = wp.blockEditor;
const {PanelBody, PanelRow} = wp.components;



wp.blocks.registerBlockType('arsha/about-1-container', {
    // Заголовок/название блока
    title: __('Внутренний контейнер подраздела About-1', 'arsha'),
    // Описание блока
    description: __(
        'Внутренний контейнер подраздела About-1. Внутри параграф (или несколько текста) и неупорядоченный список.',
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
            <h3>Контейнер подраздела About-1</h3>,
            <InnerBlocks
                allowedBlocks={['core/paragraph', 'arsha/about-1-ul']}
            />
        ];
    },
    save: props => {
        return (
            <InnerBlocks.Content />
        );
    }
});
