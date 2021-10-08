<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hy', array (
  'validators' => 
  array (
    'This value should be false.' => 'Արժեքը պետք է լինի կեղծ։',
    'This value should be true.' => 'Արժեքը պետք է լինի իրական։',
    'This value should be of type {{ type }}.' => 'Արժեքը պետք է լինի {{ type }} տեսակի։',
    'This value should be blank.' => 'Արժեքը պետք է լինի դատարկ։',
    'The value you selected is not a valid choice.' => 'Ձեր ընտրած արժեքը անվավեր ընտրություն է։',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Դուք պետք է ընտրեք ամենաքիչը {{ limit }} տարբերակներ։',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Դուք պետք է ընտրեք ոչ ավելի քան {{ limit }} տարբերակներ։',
    'One or more of the given values is invalid.' => 'Մեկ կամ ավելի տրված արժեքները անվավեր են։',
    'This field was not expected.' => 'Այս դաշտը չի սպասվում։',
    'This field is missing.' => 'Այս դաշտը բացակայում է։',
    'This value is not a valid date.' => 'Արժեքը սխալ ամսաթիվ է։',
    'This value is not a valid datetime.' => 'Ամսաթվի և ժամանակի արժեքը անվավեր է։',
    'This value is not a valid email address.' => 'Անվավեր էլ֊փոստի արժեք։',
    'The file could not be found.' => 'Նիշքը չի գտնվել։',
    'The file is not readable.' => 'Նիշքը անընթեռնելի է։',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Նիշքը չափազանց մեծ է ({{ size }} {{ suffix }}): Մաքսիմալ թույլատրելի չափսը՝ {{ limit }} {{ suffix }}։',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-տեսակը անվավեր է է({{ type }}): Նիշքերի թույլատրելի MIME-տեսակներն են: {{ types }}։',
    'This value should be {{ limit }} or less.' => 'Արժեքը պետք է լինի {{ limit }} կամ փոքր։',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Արժեքը չափազանց երկար է: Պետք է լինի {{ limit }} կամ ավել սիմվոլներ։',
    'This value should be {{ limit }} or more.' => 'Արժեքը պետ է լինի {{ limit }} կամ շատ։',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Արժեքը չափազանց կարճ է: Պետք է լինի {{ limit }} կամ ավելի սիմվոլներ։',
    'This value should not be blank.' => 'Արժեքը չպետք է դատարկ լինի։',
    'This value should not be null.' => 'Արժեքը չպետք է լինի null։',
    'This value should be null.' => 'Արժեքը պետք է լինի null։',
    'This value is not valid.' => 'Անվավեր արժեք։',
    'This value is not a valid time.' => 'Ժամանակի արժեքը անվավեր է։',
    'This value is not a valid URL.' => 'Արժեքը  URL  չէ։',
    'The two values should be equal.' => 'Երկու արժեքները պետք է նույնը լինեն։',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Նիշքը չափազանց մեծ է: Մաքսիմալ թույլատրելի չափսը {{ limit }} {{ suffix }} է։',
    'The file is too large.' => 'Նիշքը չափազանց մեծ է։',
    'The file could not be uploaded.' => 'Նիշքը չի կարող բեռնվել։',
    'This value should be a valid number.' => 'Արժեքը պետք է լինի թիվ։',
    'This value is not a valid country.' => 'Արժեքը պետք է լինի երկիր։',
    'This file is not a valid image.' => 'Նիշքը նկարի վավեր ֆորմատ չէ։',
    'This is not a valid IP address.' => 'Արժեքը վավեր IP հասցե չէ։',
    'This value is not a valid language.' => 'Արժեքը վավեր լեզու չէ։',
    'This value is not a valid locale.' => 'Արժեքը չի հանդիսանում վավեր տեղայնացում։',
    'This value is already used.' => 'Այդ արժեքն արդեն օգտագործվում է։',
    'The size of the image could not be detected.' => 'Նկարի չափսերը չստացվեց որոշել։',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Նկարի լայնությունը չափազանց մեծ է({{ width }}px). Մաքսիմալ չափն է {{ max_width }}px։',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Նկարի լայնությունը չափազանց փոքր է ({{ width }}px). Մինիմալ չափն է {{ min_ width }}px։',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Նկարի բարձրությունը չափազանց մեծ է ({{ height }}px). Մաքսիմալ չափն է {{ max_height }}px։',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Նկարի բարձրությունը չափազանց փոքր է ({{ height }}px). Մինիմալ չափն է {{ min_height }}px։',
    'This value should be the user\'s current password.' => 'Այս արժեքը պետք է լինի օգտագործողի ներկա ծածկագիրը։',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Այս արժեքը պետք է ունենա ճիշտ {{ limit }} սիմվոլներ։',
    'The file was only partially uploaded.' => 'Նիշքի մասնակի բեռնման սխալ։',
    'No file was uploaded.' => 'Նիշքը չի բեռնվել։',
    'No temporary folder was configured in php.ini.' => 'php.ini նիշքում ժամանակավոր պանակ նշված չէ։',
    'Cannot write temporary file to disk.' => 'Ժամանակավոր նիշքը հնարավոր չէ գրել սկավառակի վրա։',
    'A PHP extension caused the upload to fail.' => 'PHP ֆորմատը դարձել է բեռնման չհաջողման պատճառ։',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Այս համախումբը պետք է պաուրակի {{ limit }} կամ ավելի տարրեր։|Այս հավելվածը պետք է պարունակի limit }} տարր կամ ավելին։|Այս համախումբը պետք է պարունակի {{ limit }} տարրերին կամ ավելի։',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Այս համախումբը պետք է պաուրակի {{ limit }} տարրեր կամ քիչ։|Այս համախումբը պետք է պաուրակի {{ limit }} տարր կամ քիչ։|Այս համախումբը պետք է պաուրակի {{ limit }} տարրեր կամ քիչ։',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Այս համախումբը պետք է պաուրակի ուղիղ {{ limit }} տարր։|Այս համախումբը պետք է պաուրակի ուղիղ {{ limit }} տարրեր։|Այս համախումբը պետք է պաուրակի {{ limit }} տարրեր։',
    'Invalid card number.' => 'Քարտի սխալ համար:',
    'Unsupported card type or invalid card number.' => 'Չսպասարկվող կամ սխալ քարտի համար:',
    'This is not a valid International Bank Account Number (IBAN).' => 'Արժեքը վավեր միջազային բանկային հաշվի համար չէ (IBAN)։',
    'This value is not a valid ISBN-10.' => 'Արժեքը ունի անվավեր ISBN-10 ձևաչափ։',
    'This value is not a valid ISBN-13.' => 'Արժեքը ունի անվավեր ISBN-13 ձևաչափ։',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Արժեքը չի համապատասխանում ISBN-10 և ISBN-13 ձևաչափերին։',
    'This value is not a valid ISSN.' => 'Արժեքը չի համապաստասխանում ISSN ձևաչափին։',
    'This value is not a valid currency.' => 'Արժեքը վավեր տարադրամ չէ։',
    'This value should be equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի {{ compared_value }}։',
    'This value should be greater than {{ compared_value }}.' => 'Արժեքը պետք է մեծ լինի, քան {{ compared_value }}։',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի հավասար կամ մեծ քան {{ compared_value }}։',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Արժեքը պետք է լինի ինչպես {{ compared_value_type }} {{ compared_value }}։',
    'This value should be less than {{ compared_value }}.' => 'Արժեքը պետք է լինի փոքր քան {{ compared_value }}։',
    'This value should be less than or equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի փոքր կամ հավասար {{ compared_value }}։',
    'This value should not be equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի հավասար {{ compared_value }}։',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Արժեքը պետք է լինի նունը {{ compared_value_type }} {{ compared_value }}:',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Պատկերի կողմերի հարաբերակցությունը խիստ մեծ է ({{ ratio }}). Մաքսիմալ հարաբերակցությունը՝ {{ max_ratio }}։',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Պատկերի կողմերի հարաբերակցությունը խիստ փոքր է ({{ ratio }}). Մինիմալ հարաբերակցությունը՝ {{ min_ratio }}։',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Պատկերը քառակուսի է({{ width }}x{{ height }}px)։ Քառակուսի նկարներ չեն թույլատրվում։',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Պատկերը ալբոմային ուղղվածության է({{ width }}x{{ height }}px)․ դա չի թույլատրվում։',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Պատկերը պորտրետային ուղղվածության է ({{ width }}x{{ height }}px)․ դա չի թույլատրվում։',
    'An empty file is not allowed.' => 'Դատարկ նիշք չի թույլատրվում։',
    'The host could not be resolved.' => 'Հոսթի անունը հնարավոր չի պարզել։',
    'This value does not match the expected {{ charset }} charset.' => 'Արժեքը չի համընկնում {{ charset }} կոդավորման հետ։',
    'This is not a valid Business Identifier Code (BIC).' => 'Սա վավեր Business Identifier Code (BIC) չէ։',
    'Error' => 'Սխալ',
    'This is not a valid UUID.' => 'Սա վավեր UUID չէ։',
    'This value should be a multiple of {{ compared_value }}.' => 'Այս արժեքը պետք է լինի բազմակի {{ compared_value }}։',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Բիզնեսի նույնականացման կոդը (BIC) կապված չէ IBAN- ի հետ {{ iban }}։',
    'This value should be valid JSON.' => 'Այս արժեքը պետք է լինի վավեր JSON։',
    'This collection should contain only unique elements.' => 'Այս համախումբը պետք է պարունակի միայն եզակի տարրեր։',
    'This value should be positive.' => 'Այս արժեքը պետք է լինի դրական։',
    'This value should be either positive or zero.' => 'Այս արժեքը պետք է լինի դրական կամ զրոյական։',
    'This value should be negative.' => 'Այս արժեքը պետք է լինի բացասական։',
    'This value should be either negative or zero.' => 'Այս արժեքը պետք է լինի բացասական կամ զրոյական։',
    'This value is not a valid timezone.' => 'Այս արժեքը վավեր ժամային գոտի չէ։',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Գաղտնաբառը գտնվել է տվյալների արտահոսքում. այն չպետք է օգտագործվի: Խնդրում ենք օգտագործել մեկ այլ գաղտնաբառ։',
    'This value should be between {{ min }} and {{ max }}.' => 'Այս արժեքը պետք է լինի  {{ min }}-ի և {{ max }}-ի միջև։',
    'This value is not a valid hostname.' => 'Այս հոստի անունը վավեր չէ։',
    'The number of elements in this collection should be a multiple of {{ compared_value }}․' => 'Այս համախմբի տարրերի քանակը պետք է հավասար լինի {{ compared_value }}-ի բազմապատիկներին։',
    'This value should satisfy at least one of the following constraints:' => 'Այս արժեքը պետք է բավարարի հետևյալ սահմանափակումներից առնվազն մեկը։',
    'Each element of this collection should satisfy its own set of constraints.' => 'Այս համախմբի յուրաքանչյուր տարր պետք է բավարարի իր սեփական սահմանափակումները։',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Այս արժեքը արժեթղթերի նույնականացման միջազգային համարը վավեր չէ(ISIN)։',
    'This form should not contain extra fields.' => 'Այս ձևը չպետք է պարունակի լրացուցիչ տողեր։',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Վերբեռնված ֆայլը չափազանց մեծ է. Խնդրվում է վերբեռնել ավելի փոքր չափսի ֆայլ։',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF արժեքը անթույլատրելի է. Փորձեք նորից ուղարկել ձևը։',
    'This value is not a valid HTML5 color.' => 'Այս արժեքը վավեր HTML5 գույն չէ։',
    'Please enter a valid birthdate.' => 'Խնդրում ենք մուտքագրել վավեր ծննդյան ամսաթիվ։',
    'The selected choice is invalid.' => 'Ընտրված ընտրությունն անվավեր է։',
    'The collection is invalid.' => 'Համախումբն անվավեր է։',
    'Please select a valid color.' => 'Խնդրում ենք ընտրել վավեր գույն։',
    'Please select a valid country.' => 'Խնդրում ենք ընտրել վավեր երկիր։',
    'Please select a valid currency.' => 'Խնդրում ենք ընտրել վավեր արժույթ։',
    'Please choose a valid date interval.' => 'Խնդրում ենք ընտրել ճիշտ ամսաթվերի միջակայք։',
    'Please enter a valid date and time.' => 'Խնդրում ենք մուտքագրել վավեր ամսաթիվ և ժամ։',
    'Please enter a valid date.' => 'Խնդրում ենք մուտքագրել վավեր ամսաթիվ։',
    'Please select a valid file.' => 'Խնդրում ենք ընտրել վավեր ֆայլ։',
    'The hidden field is invalid.' => 'Թաքնված դաշտը անվավեր է։',
    'Please enter an integer.' => 'Խնդրում ենք մուտքագրել ամբողջ թիվ։',
    'Please select a valid language.' => 'Խնդրում ենք ընտրել վավեր լեզու։',
    'Please select a valid locale.' => 'Խնդրում ենք ընտրել վավեր տեղայնացում։',
    'Please enter a valid money amount.' => 'Խնդրում ենք մուտքագրել վավեր գումար։',
    'Please enter a number.' => 'Խնդրում ենք մուտքագրել համար։',
    'The password is invalid.' => 'Գաղտնաբառն անվավեր է։',
    'Please enter a percentage value.' => 'Խնդրում ենք մուտքագրել տոկոսային արժեք։',
    'The values do not match.' => 'Արժեքները չեն համընկնում։',
    'Please enter a valid time.' => 'Մուտքագրեք վավեր ժամանակ։',
    'Please select a valid timezone.' => 'Խնդրում ենք ընտրել վավեր ժամային գոտի։',
    'Please enter a valid URL.' => 'Խնդրում ենք մուտքագրել վավեր URL։',
    'Please enter a valid search term.' => 'Խնդրում ենք մուտքագրել վավեր որոնման տերմին։',
    'Please provide a valid phone number.' => 'Խնդրում ենք տրամադրել վավեր հեռախոսահամար։',
    'The checkbox has an invalid value.' => 'Նշման վանդակը անվավեր արժեք ունի։',
    'Please enter a valid email address.' => 'Խնդրում ենք մուտքագրել վավեր էլ-հասցե։',
    'Please select a valid option.' => 'Խնդրում ենք ընտրել ճիշտ տարբերակ։',
    'Please select a valid range.' => 'Խնդրում ենք ընտրել վավեր տիրույթ։',
    'Please enter a valid week.' => 'Մուտքագրեք վավեր շաբաթ։',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Նույնականացման սխալ։',
    'Authentication credentials could not be found.' => 'Նույնականացման տվյալները չեն գտնվել։',
    'Authentication request could not be processed due to a system problem.' => 'Համակարգային սխալ՝ նույնականացման հացրման պրոցեսինգի ժամանակ։',
    'Invalid credentials.' => 'Սխալ մուտքային տվյալներ',
    'Cookie has already been used by someone else.' => 'Cookie-ն արդեն օգտագործվում է ուրիշի կողմից։',
    'Not privileged to request the resource.' => 'Ռեսուրսի հարցման համար չկա թույլատվություն։',
    'Invalid CSRF token.' => 'Անվավեր CSRF թոքեն։',
    'No authentication provider found to support the authentication token.' => 'Նույնականացման ոչ մի մատակարար չի գտնվել, որ աջակցի նույնականացման թոքենը։',
    'No session available, it either timed out or cookies are not enabled.' => 'Հասանելի սեսիա չկա, կամ այն սպառվել է կամ cookie-ները անջատված են:',
    'No token could be found.' => 'Թոքենը չի գտնվել։',
    'Username could not be found.' => 'Օգտանունը չի գտնվել։',
    'Account has expired.' => 'Հաշիվը ժամկետանց է։',
    'Credentials have expired.' => 'Մուտքային տվյալները ժամկետանց են։',
    'Account is disabled.' => 'Հաշիվը դեկատիվացված է։',
    'Account is locked.' => 'Հաշիվն արգելափակված է։',
    'Too many failed login attempts, please try again later.' => 'Չափից շատ մուտքի փորձեր, խնդրում ենք փորձել մի փոքր ուշ',
    'Invalid or expired login link.' => 'Անվավեր կամ ժամկետանց մուտքի հղում։',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Dashboard',
    'page_title.detail' => '%entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.edit' => 'Edit %entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Create %entity_label_singular%',
    'page_title.exception' => 'Error|Errors',
    'datagrid.hidden_results' => 'Some results can\'t be displayed because you don\'t have enough permissions',
    'datagrid.no_results' => 'No results found.',
    'paginator.first' => 'First',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.last' => 'Last',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'paginator.results' => '{0} No results|{1} <strong>1</strong> result|]1,Inf] <strong>%count%</strong> results',
    'label.true' => 'Yes',
    'label.false' => 'No',
    'label.empty' => 'Empty',
    'label.null' => 'Null',
    'label.nullable_field' => 'Leave empty',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Getter method does not exist for this field or the field is not public',
    'label.form.empty_value' => 'None',
    'field.code_editor.view_code' => 'View code',
    'field.text_editor.view_content' => 'View content',
    'action.entity_actions' => 'Actions',
    'action.new' => 'Add %entity_label_singular%',
    'action.search' => 'Search',
    'action.detail' => 'Show',
    'action.edit' => 'Edit',
    'action.delete' => 'Delete',
    'action.cancel' => 'Cancel',
    'action.index' => 'Back to listing',
    'action.deselect' => 'Deselect',
    'action.add_new_item' => 'Add a new item',
    'action.remove_item' => 'Remove the item',
    'action.choose_file' => 'Choose file',
    'action.close' => 'Close',
    'action.create' => 'Create',
    'action.create_and_add_another' => 'Create and add another',
    'action.create_and_continue' => 'Create and continue editing',
    'action.save' => 'Save changes',
    'action.save_and_continue' => 'Save and continue editing',
    'batch_action_modal.title' => 'You are going to apply the "%action_name%" action to %num_items% item(s).',
    'batch_action_modal.content' => 'There is no undo for this operation.',
    'batch_action_modal.action' => 'Proceed',
    'delete_modal.title' => 'Do you really want to delete this item?',
    'delete_modal.content' => 'There is no undo for this operation.',
    'filter.title' => 'Filters',
    'filter.button.clear' => 'Clear',
    'filter.button.apply' => 'Apply',
    'filter.label.is_equal_to' => 'is equal to',
    'filter.label.is_not_equal_to' => 'is not equal to',
    'filter.label.is_greater_than' => 'is greater than',
    'filter.label.is_greater_than_or_equal_to' => 'is greater than or equal to',
    'filter.label.is_less_than' => 'is less than',
    'filter.label.is_less_than_or_equal_to' => 'is less than or equal to',
    'filter.label.is_between' => 'is between',
    'filter.label.contains' => 'contains',
    'filter.label.not_contains' => 'doesn\'t contain',
    'filter.label.starts_with' => 'starts with',
    'filter.label.ends_with' => 'ends with',
    'filter.label.exactly' => 'exactly',
    'filter.label.not_exactly' => 'not exactly',
    'filter.label.is_same' => 'is same',
    'filter.label.is_not_same' => 'is not same',
    'filter.label.is_after' => 'is after',
    'filter.label.is_after_or_same' => 'is after or same',
    'filter.label.is_before' => 'is before',
    'filter.label.is_before_or_same' => 'is before or same',
    'form.are_you_sure' => 'You haven\'t saved the changes made on this form.',
    'form.tab.error_badge_title' => 'One invalid input|%count% invalid inputs',
    'form.slug.confirm_text' => 'If you change the slug, you can break links on other pages.',
    'user.logged_in_as' => 'Logged in as',
    'user.unnamed' => 'Unnamed User',
    'user.anonymous' => 'Anonymous User',
    'user.sign_out' => 'Sign out',
    'user.exit_impersonation' => 'Exit impersonation',
    'login_page.username' => 'Username',
    'login_page.password' => 'Password',
    'login_page.sign_in' => 'Sign in',
    'exception.entity_not_found' => 'This item is no longer available.',
    'exception.entity_remove' => 'This item can\'t be deleted because other items depend on it.',
    'exception.forbidden_action' => 'The requested action can\'t be performed on this item.',
    'exception.insufficient_entity_permission' => 'You don\'t have permission to access this item.',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Delete?',
    'vich_uploader.link.download' => 'Download',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
