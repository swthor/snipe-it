<?php

return [
    'about_assets_title'           => 'حول الأصول',
    'about_assets_text'            => 'الأصول هي العناصر التي يتم تتبعها بواسطة الرقم التسلسلي أو ترميز الأصل. وهي تميل إلى أن تكون ممتلكات ذات قيمة أعلى حيث انه من المهم توثيقها.',
    'archived'  				=> 'مؤرشفة',
    'asset'  					=> 'أصل',
    'bulk_checkout'             => 'إخراج الأصول',
    'bulk_checkin'              => 'ادخال الأصل',
    'checkin'  					=> 'ادخال الأصل',
    'checkout'  				=> 'اخراج الأصل',
    'clone'  					=> 'استنساخ الأصل',
    'deployable'  				=> 'قابل للتوزيع',
    'deleted'  					=> 'تم حذف هذا الأصل.',
    'delete_confirm'            => 'هل أنت متأكد من أنك تريد حذف هذا الأصل؟',
    'edit'  					=> 'تعديل الأصل',
    'model_deleted'  			=> 'تم حذف موديل الأصول هذا. يجب استعادة الموديل قبل أن تتمكن من استعادة الأصل.',
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'قابل للطلب',
    'requested'				    => 'تم الطلب',
    'not_requestable'           => 'غير مطلوب',
    'requestable_status_warning' => 'لا تقم بتغيير حالة الطلب',
    'restore'  					=> 'استعادة الأصل',
    'pending'  					=> 'قيد الانتظار',
    'undeployable'  			=> 'غير قابل للتوزيع',
    'undeployable_tooltip'  	=> 'هذا الأصل لديه علامة حالة غير قابلة للنشر ولا يمكن التحقق منها في هذا الوقت.',
    'view'  					=> 'عرض الأصل',
    'csv_error' => 'لديك خطأ في ملف CSV الخاص بك:',
    'import_text' => '<p>Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the <code>Admin &gt; General Settings</code>.</p><p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p><p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => 'حاول مطابقة المستخدمين بواسطة <strong>firstname.lastname</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'حاول مطابقة المستخدمين بواسطة <strong>أول اسم عائلة</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'حاول مطابقة المستخدمين بواسطة <strong>الاسم الأول</strong> (<code>jane</code>) تنسيق',
    'csv_import_match_email' => 'حاول مطابقة المستخدمين بالبريد الإلكتروني <strong></strong> كاسم مستخدم',
    'csv_import_match_username' => 'حاول مطابقة المستخدمين بواسطة <strong>اسم المستخدم</strong>',
    'error_messages' => 'رسائل الخطأ:',
    'success_messages' => 'رسائل النجاح',
    'alert_details' => 'يرجى الرجوع أدناه للحصول على التفاصيل.',
    'custom_export' => 'تصدير مخصص',
    'mfg_warranty_lookup' => ':manufacturer حالة ضمان البحث',
    'user_department' => 'قسم المستخدم',
];
