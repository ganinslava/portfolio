import classnames from 'classnames';
import block_icons from '../icons/index';

const { registerBlockType }         =   wp.blocks;
const { InspectorControls }         =   wp.editor;  
const { __ }                        =   wp.i18n;
const { PanelBody, TextareaControl, 
        CheckboxControl,
        RadioControl, RangeControl }=   wp.components;

registerBlockType( 'udemy/inspector-controls-example', {
    title:                              __( 'Inspector Controls', 'recipe' ),
    description:                        __( 'Inspector Controls.', 'recipe'),
    category:                           'common',
    icon:                               block_icons.wapuu,
    attributes: {
        textarea_input: {
            type:                       'text',
        },
        checkbox_input: {
            type:                       'boolean',
            default:                    true,
        },
        radio_input: {
            type:                       'string',
            default:                    'foo',
        },
        range_input: {
            type:                       'number',
            default:                    '5',
        }
    },
    edit: ( props ) => {
        return [
            <InspectorControls>
                <PanelBody title={ __( 'Input Examples', 'recipe' ) }>
                    {/*Атрибуты метки и справки будут отображать текст в разных областях. Они работают аналогично другим
                    компонентам ввода, с которыми мы до сих пор имели дело. Атрибут value будет значением, которое будет
                    использоваться из объекта атрибутов, а атрибут onChange - это событие, которое запускается при вводе.*/}
                    <TextareaControl
                        label={ __( 'Text Area Control', 'recipe' ) }
                        help={ __( 'Help Text', 'recipe' ) }
                        value={ props.attributes.textarea_input }
                        onChange={( new_val ) => { 
                            props.setAttributes( { textarea_input: new_val } ) 
                        }} />

                    {/*Это компонент управления флажка (чекбокса), который создаст чекбокс. здесь есть один новый атрибут,
                    называемый заголовком (heading). Заголовком будет текст над флажком. Метка появится справа от флажка,
                    а атрибут справки появится под флажком. Они являются необязательными, поэтому используйте их по своему
                    усмотрению. Затем у нас есть атрибут checked, который должен быть логическим значением true или false.
                    Если значение true, значит в поле поставлена галочка. Наконец, у нас есть атрибут onChange, который будет
                    срабатывать всякий раз, когда пользователь устанавливает флажок. Как и раньше, мы обновляем атрибут
                    новым значением, которое будет либо истинным, либо ложным.*/}
                    <CheckboxControl
                        heading={ __( 'Checkbox Control', 'recipe' ) }
                        label={ __( 'Click me!', 'recipe' ) }
                        help={ __( 'Help Text', 'recipe' ) }
                        checked={ props.attributes.checkbox_input }
                        onChange={( new_val ) => { 
                            props.setAttributes( { checkbox_input: new_val } ) 
                        }}
                    />

                    {/*Компонент управления RadioControl, который отобразит поле ввода радиокнопок. Атрибут метки отобразит
                    текст над полями ввода радиокнопок, атрибут selected позволит установить значение и определить,
                    какой переключатель выбран. Затем у нас есть атрибут options, который используется для отображения
                    всех доступных опций. Имейте в виду, что поля ввода радиокнопок могут иметь только одно значение для
                    каждой группы. Атрибут options ожидает, что вы передадите массив объектов. Каждый объект должен
                    содержать два свойства: метку и значение. В этом примере у меня есть два варианта, которыми являются
                    Foo и Bar соответственно. Внутри объекта атрибута options я установил значение по умолчанию как foo,
                    поэтому переключатель foo должен быть установлен по умолчанию. Наконец, у нас есть атрибут onChange
                    для обработки изменений. */}
                    <RadioControl
                        label={ __( 'Radio Control', 'recipe' ) }
                        selected={ props.attributes.radio_input }
                        options={[
                            { label: 'Foo', value: 'foo' },
                            { label: 'Bar', value: 'bar' },
                        ]}
                        onChange={( new_val ) => { 
                            props.setAttributes( { radio_input: new_val } ) 
                        }} />

                    {/*компонент контроля Range (ползунок). Этот компонент немного сложнее, чем другие компоненты. Он
                    создает ползунок, который позволит пользователям мышкой выбирать числовое значение. В качестве
                    альтернативы они могут просто ввести значение на клавиатуре. Первые два атрибута - это атрибуты
                    значков "перед" и "после". Эти значки будут отображаться до и после ползунка. Я использую набор
                    значков DashIcon, но вы можете использовать свои собственные значки. Если вы пойдете по этому пути,
                    я рекомендую поместить SVG в отдельный файл, как мы делали ранее в этом курсе. Мы также можем
                    установить атрибуты min и max, которые позволят ограничить выбор значения. Наконец, у нас есть
                    атрибуты value и onChange, которые будут делать то же самое, что и раньше. */}
                    <RangeControl
                        beforeIcon="arrow-left-alt2"
                        afterIcon="arrow-right-alt2"
                        label={ __( 'Range Control', 'recipe' ) }
                        min={ 1 }
                        max={ 10 }
                        value={ props.attributes.range_input }
                        onChange={( new_val ) => { 
                            props.setAttributes( { range_input: new_val } ) 
                        }} />
                </PanelBody>
            </InspectorControls>,
            <div className={ props.className }>
                <ul>
                    <li><strong>Textarea Input</strong> - { props.attributes.textarea_input }</li>
                    {/* Если бы я поставил флажок, мы бы увидели, что в блоке отображается значение true или false.
                    Вещь, на которую я хочу обратить внимание – это то что я использую функцию toString для
                    преобразования логического значения в строку.*/}
                    <li><strong>Checkbox Input</strong> - { props.attributes.checkbox_input.toString() }</li>
                    <li><strong>Radio Input</strong> - { props.attributes.radio_input }</li>
                    <li><strong>Range Input</strong> - { props.attributes.range_input }</li>
                </ul>
            </div>
        ];
    },
    save: ( props ) => {
        return (
            <div>
                <ul>
                    <li><strong>Textarea Input</strong> - { props.attributes.textarea_input }</li>
                    <li><strong>Checkbox Input</strong> - { props.attributes.checkbox_input.toString() }</li>
                    <li><strong>Radio Input</strong> - { props.attributes.radio_input }</li>
                    <li><strong>Range Input</strong> - { props.attributes.range_input }</li>
                </ul>
            </div>
        )
    },

});
