// 1. Import necessary components.
// 2. Define the attributes.
// 3. Load the component in the edit()
// 4. Render the block

import block_icons from '../icons/index';

const { registerBlockType }         =   wp.blocks;
// Компонент форматированного текста позволит пользователю редактировать содержимое внутри,
// а также форматировать это содержимое.
// https://github.com/WordPress/gutenberg/tree/trunk/packages/block-editor/src/components/rich-text
const { RichText }                  =   wp.editor;
const { __ }                        =   wp.i18n;

registerBlockType( 'udemy/rich-text', {
    title:                              __( 'Rich Text Example', 'recipe' ),
    description:                        __( 'Rich text example', 'recipe' ),
    category:                           'common',
    icon:                               block_icons.wapuu,
    attributes: {
        message: {
            // Ранее мы использовали строковый тип string, однако на этот раз мы храним не только текст,
            // но и элементы и атрибуты. Компонент форматированного текста будет генерировать много контента,
            // и тип «массив» идеально подходит для множественных частей контента.
            type: 'array',
            // Создаваемый контент будет сложным. Когда WordPress будет извлекать данные из контента,
            // ему понадобится все. Это будет включать в себя текст, атрибуты, элементы текстовых элементов и все,
            // что будет вложенным. Значение children сообщит WordPress сделать именно так, как надо.
            source: 'children',
            selector: '.message-ctr'
        }
    },
    edit: ( props ) => {
        return (
            <div className={ props.className }>
                <h3>Rich Text Example Block</h3>
                <RichText
                    // Элемент, который будет обернут вокруг вводимого содержимого. Вы можете установить для этого
                    // параметра значение ‘h3’, если хотите, чтобы содержимое было заголовком. Это очень гибкий
                    // компонент. Нам подойдет значение ‘div’.
                    tagName="div"
                    // Компонент форматированного текста позволит вашим пользователям создавать многострочный контент
                    // всякий раз, когда пользователь нажмет клавишу Enter на клавиатуре. Свойство multiline определит,
                    // как этот контент будет разбит. По умолчанию при этом будет использоваться разрыв строки, но я
                    // предпочитаю использовать теги абзаца для лучшего форматирования.
                    multiline="p"
                    placeholder={__('Add your content here.', 'recipe')}
                    // Как и раньше, событие onChange будет срабатывать при изменении пользователем содержимого.
                    // Установим значением стрелочную функцию, которая вызовет функцию props.setAttributes
                    // и обновит атрибут сообщения новым значением.
                    onChange={(new_val) => {
                        props.setAttributes({message: new_val});
                    }}
                    value={props.attributes.message}
                />
            </div>
        );
    },
    save: ( props ) => {
        return (
            <div>
                <h3>Rich Text Example Block</h3>
                {/*Класс «message-ctr» мы указали в свойстве селектора для атрибута.*/}
                <div className="message-ctr">
                    {props.attributes.message}
                </div>
            </div>
        )
    }
});