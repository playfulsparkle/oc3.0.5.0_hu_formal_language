<?php
// Heading
$_['heading_title']			= 'Cardinity';

// Text
$_['text_extension']		= 'Bővítmények';
$_['text_success']			= 'Siker: A Cardinity fizetési modul sikeresen módosítva lett!';
$_['text_edit']             = 'Cardinity szerkesztése';
$_['text_cardinity']		= '<a href="http://cardinity.com/?crdp=opencart" target="_blank" rel="external noopener noreferrer"><img src="view/image/payment/cardinity.png" alt="Cardinity" title="Cardinity" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_production']		= 'Termelés';
$_['text_sandbox']			= 'Tesztkörnyezet';
$_['text_payment_info']		= 'Visszatérítési információ';
$_['text_no_refund']		= 'Nincs visszatérítési előzmény';
$_['text_confirm_refund']	= 'Biztosan visszatérítést szeretne?';
$_['text_na']				= 'Nem elérhető';
$_['text_success_action']	= 'Siker';
$_['text_error_generic']	= 'Hiba: Hiba történt a kérésével. Kérjük, ellenőrizze a naplókat.';
$_['text_amount']			= 'Összeg';
$_['text_description']	    = 'Leírás';

// Column
$_['column_refund']			= 'Visszatérítés';
$_['column_date']			= 'Dátum';
$_['column_refund_history'] = 'Visszatérítési előzmények';
$_['column_action']			= 'Művelet';
$_['column_status']			= 'Állapot';
$_['column_amount']			= 'Összeg';
$_['column_description']	= 'Leírás';

// Entry
$_['entry_editing_shop']	= 'Shop';
$_['entry_total']			= 'Teljes összeg';
$_['entry_order_status']	= 'Rendelés állapot';
$_['entry_geo_zone']		= 'Adózóna';
$_['entry_status']			= 'Állapot';
$_['entry_sort_order']		= 'Sorrend';
$_['entry_key']				= 'Kulcs';
$_['entry_secret']			= 'Titkos';
$_['entry_debug']			= 'Hibakeresés';
$_['project_key']			= 'Project ID';
$_['project_secret']		= 'Project Secret';
$_['entry_external']		= 'External checkout';
$_['entry_log']		        = 'Transaction Log';

// Help
$_['help_debug']			= 'A debug engedélyezése érzékeny adatokat ír a naplófájlba. Mindig tiltsa le, kivéve, ha másképp utasítják.';
$_['help_total']            = 'Az a rendelési összeg, amelyet a rendelésnek el kell érnie, mielőtt ez a fizetési mód aktívvá válik.';
$_['help_external']			= 'Enabling external checkout will perform the payment in our secured hosted server, instead of internally.';
$_['help_consumer_cred']	= 'Consumer Key and Consumer Secret can be found in your cardinity dashboard > Integration > API settings. Only required if using internal method.';
$_['help_project_cred']		= 'Project ID and Project Secret can be found in your cardinity dashboard > Integration > API settings. Only required if using external hosted method.';

// Button
$_['button_refund']			= 'Visszatérítés';

// Error
$_['error_key']				= 'Kulcs szükséges!';
$_['error_secret']			= 'Titkos szükséges!';
$_['error_project_key']		= 'Project Key Required!';
$_['error_project_secret']	= 'Project Secret Required!';
$_['error_composer']		= 'Nem sikerült betölteni a Cardinity SDK-t. Kérjük, töltse le a lefordított vendor mappát, vagy futtassa a kompozert.';
$_['error_php_version']		= 'Minimum PHP 5.4.0 verzió szükséges!';
$_['error_permission']		= 'Figyelmeztetés: Nincs jogosultsága a Cardinity módosításához!';
$_['error_connection']		= 'Probléma merült fel a kapcsolat létrehozásakor a Cardinity API-val. Kérjük, ellenőrizze a kulcs és titkos beállításait.';
$_['error_warning']         = 'Figyelmeztetés: Kérjük, ellenőrizze, és javítsa a hibákat az űrlapon!';
$_['refund_approved']	= 'Refund Approved';
$_['refund_declined']	= 'Refund Declined';
$_['refund_processing']	= 'Refund Processing, check back later';