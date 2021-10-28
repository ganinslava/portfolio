import classnames from 'classnames';

const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const {InnerBlocks} = wp.blockEditor;



wp.blocks.registerBlockType('arsha/inner-block', {
    // Заголовок/название блока
    title: __('Inner Block', 'arsha'),

    // Описание блока
    description: __(
        'Тег section с id="hero" и классами "d-flex align-items-center". Внутри section находится div.container, внутри которого находится div.row',
        'arsha'
    ),

    // Категория блока (common, formatting, layout, widgets, embed).
    category: 'layout',

    supports: {
        html: false

    },
    attributes: {

    },


    edit: props => {
        const { className } = props;
        return [
            <section id="hero" className={classnames(
                'd-flex',
                'align-items-center'
            )}>
                <div className="container">
                    <div className="row">
                        <InnerBlocks
                            // allowedBlocks={['core/paragraph']}
                        />
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
                        <InnerBlocks.Content />
                    </div>
                </div>
            </section>
        );
    }
});
