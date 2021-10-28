import classnames from 'classnames';
import block_icons from '../icons/index';
import btn_icon from './icon';
import './editor.scss';

const { registerBlockType }         =   wp.blocks;
const { __ }                        =   wp.i18n;
const { BlockControls, InspectorControls }             =   wp.editor;
const { Toolbar, Button, Tooltip, PanelBody, PanelRow, FormToggle }  =   wp.components;

registerBlockType( 'udemy/night-mode', {
    title:                              __( 'Night Mode', 'recipe' ),
    description:                        __( 'Content with night mode.', 'recipe'),
    category:                           'common',
    icon:                               block_icons.wapuu,
    attributes: {
        night_mode: {
            type: 'boolean',
            default: false
        }
    },
    edit: ( props ) => {
        // Мы хотим изменить атрибут ночного режима при нажатии кнопки. Мы хотим изменить текущее значение.
        // У компонента кнопки есть событие, вызываемое при нажатии (onChange). Установим для него стрелочную
        // функцию, как и раньше. Вызовем функцию setAttributes и установим для атрибута ночного
        // режима противоположное значение.
        const toggle_night_mode = () => {
            props.setAttributes({
                night_mode: !props.attributes.night_mode
            })
        }

        return [
            <InspectorControls>
                <PanelBody title={__('Night Mode', 'recipe')}>
                    <PanelRow>
                        {/*Пока мы это не обозначим, компонент переключения формы не будет генерировать метку (label),
                        поэтому нам нужно будет сделать это самостоятельно. Прямо над компонентом добавим метку,
                        текстом внутри которой будет “Night Mode”. Также устанавливается атрибут for, однако, for
                        является зарезервированным ключевым словом в JavaScript, поэтому вместо этого нам нужно будет
                        использовать атрибут htmlFor. Значением будет ID поля ввода. В нашем случае
                        – 'udemy-recipe-night-mode-toggle'. */}
                        <label htmlFor="udemy-recipe-night-mode-toggle">
                            {__('Night Mode', 'recipe')}
                        </label>
                        {/*FormToggle - это настраиваемое поле формы, которое позволит пользователю переключать значение.*/}
                        <FormToggle id='udemy-recipe-night-mode-toggle'
                                    // Здесь нужно установить атрибут checked. Значение должно быть булевым.
                                    // Мы установим значением значение атрибута night_mode.
                                    checked={props.attributes.night_mode}
                                    onChange={toggle_night_mode}
                        />
                    </PanelRow>
                </PanelBody>
            </InspectorControls>,
            <div className={props.className}>
                <BlockControls>
                    {/*Компонент панели инструментов позаботится о добавлении разделителя между различными панелями инструментов,
                    которые могут быть также загружены. Этот компонент правильно расположит вашу кнопку в компоненте элементов
                    управления блока (т.е. внутри BlockControls). Далее мы загрузим компонент всплывающей подсказки (ToolTip),
                    этот компонент отобразит всплывающую подсказку, если пользователь наведет курсор на содержимое, размещенное
                    внутри компонента. Нам не нужно беспокоиться об отлавливании (прослушке) событий или позиционировании элемента,
                    поскольку это будет сделано за нас. Единственный атрибут, который нам нужно установить, - это атрибут text.
                    Установим строку “Night mode” и сделаем доступность для перевода.*/}
                    <Toolbar>
                        <Tooltip text={__('Night mode', 'recipe')}>
                            {/*Порядок здесь действительно имеет значение. Если компонент кнопки размещен внутри компонента
                            панели инструментов, тогда стили для компонента кнопки будут скорректированы. Эта настройка приведет
                            к тому, что все будет выглядеть в соответствии с другими кнопками на панели инструментов. Теперь
                            мы собираемся применить несколько вещей к этой кнопке. Сначала добавим CSS классы. Однако здесь
                            есть проблема. React не поддерживает применение сразу нескольких классов к одному компоненту.
                            Если проскроллить файл вверх, можно увидеть, что я загружаю модуль под названием classnames
                            (имена классов). Этот модуль позаботится о том, чтобы разрешить применение нескольких классов
                            к одному компоненту. Он очень прост в использовании. Я собираюсь применить к кнопке атрибут имени
                            класса (classname), значением для которого будет функция имен классов (classnames). Функция будет
                            принимать список имен классов, которые мы бы хотели применить.*/}
                            <Button className={classnames(
                                'components-icon-button',
                                'components-toolbar__control',

                                // Мы собираемся применить еще один класс с названием is-active (является ли активным),
                                // этот класс будет динамическим. Мы разместим его внутри объекта, поскольку если мы хотим
                                // иметь динамические классы, мы должны отформатировать их правильным образом. Сперва
                                // указывается имя добавляемого класса, а значение может быть либо истинным, либо ложным.
                                // Если значение истинно, класс будет применен. Если значение ложно, класс добавлен не будет.
                                // Установим проверяемым значением props.attributes.night_mode.

                                {'is-active': props.attributes.night_mode}
                            )}
                            onClick={toggle_night_mode}>
                                {btn_icon}
                            </Button>
                        </Tooltip>
                    </Toolbar>
                </BlockControls>
                <div className={classnames(
                    "content-example",
                    // Класс night позаботится о добавлении темного фона и белого текста. Так мы назвали его в наших
                    // стилевых файлах SCSS. Проверочным значением укажем props.attributes.night_mode.
                    {'night': props.attributes.night_mode}
                )}>
                    This is an example of a block with night mode.
                </div>
            </div>
        ];
    },
    save: ( props ) => {
        return (
            <div>
                <div className={classnames(
                    "content-example",
                    {'night': props.attributes.night_mode}
                )}>
                    This is an example of a block with night mode.
                </div>
            </div>
        )
    },
});
