import classnames from 'classnames';

const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const {InnerBlocks} = wp.blockEditor;



wp.blocks.registerBlockType('arsha/section-clients', {
    // Заголовок/название блока
    title: __('Секция клиентов', 'arsha'),
    // Описание блока
    description: __(
        'Тег section с id="clients"',
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
            <h2>Секция Clients (этот заголовок не отображается в публичной части сайта)</h2>,
            <section id="cliens" className={classnames('cliens', 'section-bg')}>
                <div className="container">
                    <div className="row" data-aos="zoom-in">
                        <InnerBlocks
                            allowedBlocks={['arsha/client']}
                        />
                    </div>
                </div>
            </section>
        ];
    },
    save: props => {
        return (
            <section id="cliens" className={classnames('cliens', 'section-bg')}>
                <div className="container">
                        <div className="row" data-aos="zoom-in">
                            <InnerBlocks.Content />
                        </div>
                </div>
            </section>
        );
    }
});
