Drupal.locale = { 'pluralFormula': function($n) { return Number((((($n%10)==1)&&(($n%100)!=11))?(0):((((($n%10)>=2)&&(($n%10)<=4))&&((($n%100)<10)||(($n%100)>=20)))?(1):2))); }, 'strings': { "Unspecified error": "Не специфичная ошибка", "Drag to re-order": "Переместите для изменения порядка", "Changes made in this table will not be saved until the form is submitted.": "Изменения, сделанные в списке не вступят в силу пока вы не сохраните их.", "The changes to these blocks will not be saved until the \x3cem\x3eSave blocks\x3c/em\x3e button is clicked.": "Изменения, сделанные в блоках не вступят в силу пока вы не нажмете кнопку \x3cem\x3eСохранить блоки\x3c/em\x3e.", "Upload": "Закачать", "Only files with the following extensions are allowed: %files-allowed.": "Прикреплять можно только файлы с расширениями: %files-allowed.", "Automatic alias": "Автоматические синонимы", "Testing clean URLs...": "Тестирование чистых URL-ов...", "Your server has been successfully tested to support this feature.": "Ваш сервер был успешно протестирован на возможность использования этой особенности.", "Your system configuration does not currently support this feature. The \x3ca href=\"http://drupal.org/node/15365\"\x3ehandbook page on Clean URLs\x3c/a\x3e has additional troubleshooting information.": "Конфигурация вашей системы на данный момент не поддерживает этой функции. Дополнительная информация доступна на \x3ca href=\"http://drupal.org/node/15365\"\x3eстраницы документации о Clean URLs\x3c/a\x3e.", "Select all rows in this table": "Отметить все колонки таблицы", "Deselect all rows in this table": "Снять отметку со всех колонок таблицы", "Join summary": "Объединить анонс", "Split summary at cursor": "Отделить анонс от основного материала", "An error occurred. \n@uri\n@text": "Возникла ошибка. \r\n@uri\r\n@text", "An error occurred. \n@uri\n(no information available).": "Возникла ошибка. \r\n@uri\r\n(нет доступной информации).", "An HTTP error @status occurred. \n@uri": "Произошла HTTP ошибка @status. \r\n@uri" } };