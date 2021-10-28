import classnames from 'classnames';

const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const {InnerBlocks} = wp.blockEditor;



wp.blocks.registerBlockType('arsha/inner-block', {
    // Заголовок/название блока
    title: __('Элемент Main', 'arsha'),
    // Описание блока
    description: __(
        'Тег main с id="main"',
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
            <h2>Корневая секция Main (этот заголовок не отображается в публичной части сайта)</h2>,
            <main id="main">
                        <InnerBlocks
                            // allowedBlocks={['core/paragraph']}
                        />
            </main>
        ];
    },
    save: props => {
        return (
            <main id="main">
                        <InnerBlocks.Content />
            </main>
        );
    }
});
