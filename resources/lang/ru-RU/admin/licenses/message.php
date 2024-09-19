<?php

return array(

    'does_not_exist' => 'Лицензии не существует или у вас нет разрешения на её просмотр.',
    'user_does_not_exist' => 'Пользователь не существует или у вас нет разрешения на его просмотр.',
    'asset_does_not_exist' 	=> 'Актив который вы пытаетесь ассоциировать с этой лицензией не существует.',
    'owner_doesnt_match_asset' => 'Владелец актива, который вы пытаетесь связать с этой лицензией, отличается от выбранного в списке пользователя.',
    'assoc_users'	 => 'Эта лицензия выдана пользователю и не может быть удалена. Перед удалением необходимо сначала списать лицензию на склад. ',
    'select_asset_or_person' => 'Вы должны выбрать актив или пользователя, но не оба.',
    'not_found' => 'Лицензия не найдена',
    'seats_available' => ':seat_count мест доступно',


    'create' => array(
        'error'   => 'Невозможно создать лицензию, повторите попытку.',
        'success' => 'Лицензия успешно создана.'
    ),

    'deletefile' => array(
        'error'   => 'Не удалось удалить файл. Повторите попытку.',
        'success' => 'Файл успешно удален.',
    ),

    'upload' => array(
        'error'   => 'Не удалось загрузить файл(ы). Повторите попытку.',
        'success' => 'Файл(ы) успешно загружены.',
        'nofiles' => 'Не выбрано ни одного файла для загрузки или файл, который вы пытаетесь загрузить, слишком большой',
        'invalidfiles' => 'Один из ваших файлов слишком большой или имеет запрещенный тип файла. Резрешенные типы файлов: png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar, rtf, xml, и lic.',
    ),

    'update' => array(
        'error'   => 'Невозможно обновить лицензию, повторите попытку',
        'success' => 'Лицензия успешно обновлена.'
    ),

    'delete' => array(
        'confirm'   => 'Вы уверены, что хотите удалить эту лицензию?',
        'error'   => 'При удалении лицензии возникли проблемы. Повторите попытку.',
        'success' => 'Лицензия успешно удалена.'
    ),

    'checkout' => array(
        'error'   => 'При выдаче лицензии произошла ошибка. Повторите попытку.',
        'success' => 'Лицензия успешно назначена',
        'not_enough_seats' => 'Недостаточно лицензионных мест для оформления заказа',
        'mismatch' => 'Предоставленное лицензионное место не соответствует лицензии',
        'unavailable' => 'Место недоступно для выдачи.',
    ),

    'checkin' => array(
        'error'   => 'При возврате лицензии произошла ошибка. Попробуйте еще раз.',
        'success' => 'Лицензия успешно назначена'
    ),

);
