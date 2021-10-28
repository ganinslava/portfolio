
import block_icons from '../icons/index';
import './editor.scss';

//Деструктурирование необходимых объектов.
const{registerBlockType} = wp.blocks;
const{__} = wp.i18n;
const{InspectorControls, BlockControls, AlignmentToolbar, BlockAlignmentToolbar} = wp.editor;
const{PanelBody, PanelRow, TextControl, SelectControl} = wp.components;



    // Регистрация нового блока Гутенберг. Функции необходимо передать 2 обязательных параметра. Имя и объект настроек.
    // Имена блоков должны содержать префикс пространства имен, включать только строчные буквенно-цифровые символы или
    // тире и начинаться с буквы.
    // https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/

wp.blocks.registerBlockType('udemy/recipe', {
    // Заголовок/название блока
    title: __('Recipe', 'recipe'),
    // Описание блока
    description: __(
        'Provides a short summary of a recipe.',
        'recipe'
    ),

    // Категория блока (common, formatting, layout, widgets, embed).
    category: 'common',
    // Иконка значка блока
    icon: block_icons.wapuu,
    // Ключевые слова для поиска блока (необяхательный параметр). До трех ключевых словосочетаний.
    keywords: [
        __('Food', 'recipe'),
        __('Ingredients', 'recipe'),
        __('Meal Type', 'recipe'),
    ],
    // Аналогично функции add_theme_support, за исключением того, что она специфична для самого редактора.
    // https://developer.wordpress.org/block-editor/reference-guides/block-api/block-supports/
    supports: {
        html: false
    },
    // Атрибуты - это пользовательские значения, связанные с блоком Gutenberg.
    attributes: {
        /*
        Gutenberg будет интерпретировать это следующим образом. Мы сообщаем Gutenberg,
        что у нас есть атрибут под названием indgredients. Если данные берутся из HTML,
        тогда необходимое содержимое можно найти внутри тега с классом ingredients-ph.
        Найденное содержимое нужно извлечь и сохранить значение в виде строки. Это будет
        сделано для каждого атрибута. Как только все атрибуты будут учтены, будет запущена
        функция edit, которая отобразит содержимое в самом редакторе.
         */
        ingredients: {
            // Type определяет тип данных содержимого. Integer, string, array.
            type: 'string',
            // Source может быть в виде HTML, булевых и текстовых данных. Source используется, чтобы сообщить Gutenberg,
            // что именно он должен извлечь из HTML, который поступит из базы данных.
            source: 'text',
            // Selector сообщает Gutenberg, где именно можно найти данные внутри HTML.
            selector: '.ingredients-ph'
        },
        cooking_time: {
            type: 'string',
            source: 'text',
            selector: '.utensils-ph'
        },
        utensils: {
            type: 'string',
            source: 'text',
            selector: '.utensils-ph'
        },
        cooking_experience: {
            type: 'string',
            source: 'text',
            selector: '.cooking-experience-ph',
            // Свойство default используется для присвоения атрибуту значения по умолчанию.
            default: 'Beginner'
        },
        meal_type: {
            type: 'string',
            source: 'text',
            selector: '.meal-type-ph',
            default: 'Breakfast'
        },
        // Атрибут, созданный для сохранения значения выравнивания содержимого блока (AlignmentToolbar).
        text_alignment: {
            type: 'string'
        },
        // Атрибут, созданный для сохранения значения выравнивания самого блока (BlockAlignmentToolbar).
        block_alignment: {
            type: 'string',
            default: 'wide'
        }
    },
    // Функция для установки выравнивания самого блока в редакторе, с добавленными к нему элементами управления.
    // Деструктурируем и получим свойство выравнивания блоков. Функция ожидает, что мы вернем любые изменения в ее свойства.
    // Мы можем изменить любое из свойств блока. Не только наши собственные.
    // С учетом сказанного мы хотим изменить только выравнивание. Я собираюсь создать условный оператор, который проверит,
    // установлено ли выравнивание блока по левому или по правому краю, или по ширине.
    // Это все доступные выравнивания. Если выравнивание установлено на любое из этих значений,
    // тогда мы вернем метаданные выравнивания.
    getEditWrapperProps: ({block_alignment}) => {
        if ('left' === block_alignment || 'right' === block_alignment || 'full' === block_alignment) {
            return {'data-align': block_alignment};
        }
    },
    // Функция, отображающая контент в редакторе Gutenberg. Место для размещения пользовательского интерфейса.
    // Функция принимает объект props, содержащий данные блока.
    edit: (props) => {
        // const updateIngredients = (new_val) => {
        //     props.setAttributes({ingredients: new_val})
        // }

        // Массив нужно возмращать, чтобы вернуть несолько элементов сразу.
        return [
            // InspectorControls - это настройки, которые размещены на боковой панели редактора.
            // Можно дать пользователю возможность изменить размер текста, цвет фона и даже изменить выравнивание.
            // Можно создавать свои собственные элементы управления или использовать те,
            // которые поставляются в комплекте по умолчанию.
            <InspectorControls>
                {/*
                Компонент PanelBody позаботится о создании переключаемой панели на боковой панели.
                Атрибут title используется для присвоения панели заголовка.
                */}
                <PanelBody title={__('Basics', 'recipe')}>
                    {/*Компонент PanelRow позаботится о разделении пространством содержимого внутри тела панели.*/}
                    <PanelRow>
                        <p>{__('Configure the contents of your block here.', 'recipe')}</p>
                    </PanelRow>

                    <TextControl
                        // Обязательный атрибут. Метка для текстового поля ввода.
                        label={__('Ingredients', 'recipe')}
                        // Необязательный атрибут. Подсказка.
                        help={__('Ex: tomatoes, lettuce, olive oil, etc.', 'recipe')}
                        // Значение поля. Может быть динамическим и статическим.
                        value={props.attributes.ingredients}
                        // Событие при изменении значения внутри поля. Здесь стрелочная функция принимает новое значение.
                        // Функция setAttributes будет обновлять любые данные в атрибутах. Всякий раз, когда атрибуты будут обновлены,
                        // любые компоненты, использующие эти атрибуты, также будут обновлены. Функция принимает объект, который
                        // должен содержать свойства, которые мы хотим обновить и их новые значения.
                        onChange={(new_val) => {
                            props.setAttributes({ingredients: new_val})
                        }}
                    />

                    <TextControl
                        label={__('Cooking Time', 'recipe')}
                        help={__('How long will this take to cook?', 'recipe')}
                        value={props.attributes.cooking_time}
                        onChange={(new_val) => {
                            props.setAttributes({cooking_time: new_val});
                        }}
                    />

                    <TextControl
                        label={__('Utensils', 'recipe')}
                        help={__('Ex: spoon, knife, pots, pans.', 'recipe')}
                        value={props.attributes.utensils}
                        onChange={(new_val) => {
                            props.setAttributes({utensils: new_val});
                        }}
                    />

                    <SelectControl
                        label={__('Cooking Experience', 'recipe')}
                        help={__('How skilled should the reader be?', 'recipe')}
                        value={props.attributes.cooking_experience}
                        options={[
                            {value: 'Beginner', label: 'Beginner'},
                            {value: 'Intermediate', label: 'Intermediate'},
                            {value: 'Expert', label: 'Expert'}
                        ]}
                        onChange={(new_val) => {
                            props.setAttributes({cooking_experience: new_val});
                        }}
                    />

                    <SelectControl
                        label={__('Meal Type', 'recipe')}
                        help={__('When is this best eaten?', 'recipe')}
                        value={props.attributes.meal_type}
                        options={[
                            {value: 'Breakfast', label: 'Breakfast'},
                            {value: 'Lunch', label: 'Lunch'},
                            {value: 'Dinner', label: 'Dinner'}
                        ]}
                        onChange={(new_val) => {
                            props.setAttributes({meal_type: new_val});
                        }}
                    />
                </PanelBody>
            </InspectorControls>,
            // className - ключевое слово JSX для указания имени класса элемента.
            // Свойство props.className будет сгенерировано автоматически. Во фронтенде атрибут className применяется автоматически.
            <div className={props.className}>
                {/*Все, размещенное внутри BlockControls будет помещено внутри панели инструментов.*/}
                <BlockControls>
                    {/*Элемент, отвечающий за изменение выравнивания самого блока.
                    Установим значение параметра value как props.attribute.block_alignment.
                    Атрибут onChange будет установлен как стрелочная функция, которая будет принимать новое значение.
                    Используем объект props и вызовем функцию setAttributes. Обновим атрибут block_alignment.*/}
                    <BlockAlignmentToolbar
                        value={props.attributes.block_alignment}
                        onChange={(new_val) => {
                            props.setAttributes({block_alignment: new_val})
                        }}
                    />
                    {/*Панель инструментов выравнивания содержимого блока. Этот компонент требует указания двух опций.
                    Первая - это текущее значение, а второе - функция, запускаемая при изменении значения.
                    Установим в качестве неизмененного значения атрибут выравнивания текста props.attributes.text_alignment.
                    Для измененного свойства мы собираемся добавить инлайновую функцию.
                    Мы будем ссылаться на новое значение как на new_val.
                    Используя объект props вызовем функцию setAttributes и передадим ей объект.
                    Установим для объекта свойство text_alignment со значением new_val.*/}
                    <AlignmentToolbar
                        value={props.attributes.text_alignment}
                        onChange={(new_val) => {
                            props.setAttributes({text_alignment: new_val})
                        }}
                    />
                </BlockControls>
                <ul className="list-unstyled"
                    // Применение выравнивания к блоку (AlignmentToolbar).
                    // Внутри неупорядоченного списка добавим эти атрибут стиля.
                    // Нужно установить одно свойство, а именно – textAlign.
                    // Мы укажем его в camelcase («верблюжий регистр») внутри объекта.
                    // React затем преобразует JSX код в этом объекте в соответствующие CSS свойства.
                    // Установим для свойства выравнивания значение props.attributes.text_alignment.
                    style={{textAlign: props.attributes.text_alignment}}
                >
                    <li>
                        <strong>{__('Ingredients', 'recipe')}: </strong>
                        {/*Все пользовательские атрибуты хранятся внутри объекта props.attributes.
                        Данные, к которым нужен доступ, могут быть определены по имени.
                        Имена классов должны соответствовать свойству selector соответствующих атрибутов.*/}
                        <span className="ingredients-ph">{props.attributes.ingredients}</span>
                    </li>
                    <li>
                        <strong>{__('Cooking Time', 'recipe')}: </strong>
                        <span className="cooking-time-ph">{props.attributes.cooking_time}</span>
                    </li>
                    <li>
                        <strong>{__('Utensils', 'recipe')}: </strong>
                        <span className="utensils-ph">{props.attributes.utensils}</span>
                    </li>
                    <li>
                        <strong>{__('Cooking Experience', 'recipe')}: </strong>
                        <span className="cooking-experience-ph">{props.attributes.cooking_experience}</span>
                    </li>
                    <li>
                        <strong>{__('Meal Type', 'recipe')}: </strong>
                        <span className="meal-type-ph">{props.attributes.meal_type}</span>
                    </li>
                </ul>
            </div>
        ];
    },
    // Функция, отображающая контент во фронтенде. Должна возвращать JSX.
    // Функция принимает объект props, содержащий данные блока.
    save: (props) => {
        return (
            // Класс align предоставляется темой, которую мы используем. Он начинается с фразы align,
            // за которой следует выравнивание блока. На данный момент существует четыре возможных выравнивания:
            // wide, left, center и right. Wide – это выравнивание по умолчанию,
            // при котором блок занимает всю ширину контейнера.
            <div className={`align${props.attributes.block_alignment}`}>
                <ul className="list-unstyled"
                    style={{textAlign: props.attributes.text_alignment}}
                >
                    <li>
                        <strong>{__('Ingredients', 'recipe')}: </strong>
                        <span className="ingredients-ph">{props.attributes.ingredients}</span>
                    </li>
                    <li>
                        <strong>{__('Cooking Time', 'recipe')}: </strong>
                        <span className="cooking-time-ph">{props.attributes.cooking_time}</span>
                    </li>
                    <li>
                        <strong>{__('Utensils', 'recipe')}: </strong>
                        <span className="utensils-ph">{props.attributes.utensils}</span>
                    </li>
                    <li>
                        <strong>{__('Cooking Experience', 'recipe')}: </strong>
                        <span className="cooking-experience-ph">{props.attributes.cooking_experience}</span>
                    </li>
                    <li>
                        <strong>{__('Meal Type', 'recipe')}: </strong>
                        <span className="meal-type-ph">{props.attributes.meal_type}</span>
                    </li>
                </ul>
            </div>
        )
    }
});