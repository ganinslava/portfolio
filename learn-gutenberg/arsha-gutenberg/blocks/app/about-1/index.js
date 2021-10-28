import classnames from 'classnames';

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {InspectorControls} = wp.editor;
const {InnerBlocks} = wp.blockEditor;
const {PanelBody, PanelRow} = wp.components;



wp.blocks.registerBlockType('arsha/about-1', {
    // Заголовок/название блока
    title: __('Подраздел About-1', 'arsha'),
    // Описание блока
    description: __(
        'Тег div с классом "col-lg-6". Внутри необходимо разместить блок внутреннего контейнера подраздела.',
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
            <h3>Подраздел About-1</h3>,
            <InnerBlocks
                allowedBlocks={['arsha/about-1-container']}
            />
        ];
    },
    save: props => {
        return (
            <div className="col-lg-6">
                <InnerBlocks.Content />
            </div>
        );
    }
});
