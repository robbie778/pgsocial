<?php

/**
 *
 * PGreca Social extension for phpBB.
 *
 * @copyright (c) 2018 pgreca <https:/pgreca.it>
 * @translation (c) 2018 totallybeautiful <https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1781476>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ABOUT_HOUR'						=> array(
		1				=> 'hour',
		2				=> 'hours',
	),
	'ABOUT_ME'							=> 'Über mich',
	'ABOUT_MONTH'						=> 'Monat',
	'ACTIVITY'							=> 'Aktivität',
	'ACTIVITY_PAGE'						=> 'Seitenaktivität',
	'AGO'								=> 'vor',
	//'ALBUM_CREATE'						=> '',
	//'ALBUM_CREATE_EXPLAIN'						=> '',
	//'ALBUM_CREATE_TITLE'						=> '',
	//'ALBUM_CREATE_NOW'						=> '',
	//'ALBUM_NO_PHOTO'						=> '',
	'ALL'								=> 'Alle',
	'APPROVE_PAGE'						=> 'Seite genehmigen',
	'ARE_YOU_SURE'						=> 'Diese Aktivität wird unwiederbringlich gelöscht. Bestätigen?',
	'ARE_YOU_SURE_PHOTO'				=> 'Dieses Foto wird unwiederbringlich gelöscht. Bestätigen?',
	'ATTACH_PICTURE'					=> 'Bild anhängen',
	'PG_SOCIAL_AVATAR'					=> 'Avatar',
	'COMMENT'							=> array(
		0				=> 'Kein Kommentar vorhanden',
		1				=> 'Ein Kommentar',
		2				=> 'Kommentare',
	),
	'COMMENT_THIS_ACTIVITY'				=> 'Kommentiere diesen Beitrag!',
	//'CREATE'							=> '',
	'CREATED'							=> 'Erstellt am',
	'PG_SOCIAL_COVER'				=> 'Titelbild',
	'PG_SOCIAL_DAY'								=> array(
		1	=> 'Tag',
		2	=> 'Tage',
	),
	'DO_YOU_WANT_SHARE'					=> 'Willst du diese Aktivität teilen?',
	'EDIT'								=> 'Bearbeiten',
	'EDIT_PROFILE'						=> 'Profil ändern',
	'FAVORITE_BOOK'						=> array(
		1				=> 'Lieblingsbuch',
		2				=> 'Lieblingsbücher',
	),
	'FAVORITE_GAME'						=> array(
		1				=> 'Lieblingsvideospiel',
		2				=> 'Lieblingsvideospiele',
	),
	'FAVORITE_MOVIE'					=> array(
		1				=> 'Lieblingsfilm',
		2				=> 'Lieblingsfilme',
	),
	'FAVORITE_MUSIC'					=> array(
		1				=> 'Lieblingsmusik / Song / Sänger / Band',
		2				=> 'Lieblingsmusik / Song / Sänger / Band',
	),

	'FAVORITE_TVSHOW'					=> array(
		1				=> 'Lieblingsfernsehsendung',
		2				=> 'Lieblingsfernsehsendungen',
	),
	'FRIEND'							=> array(
		1				=> 'Freund',
		2				=> 'Freunde',
	),
	//'FRIENDS_NO_REQUEST'				=> '',
	'FRIENDS_SUGGESTION'				=> 'Freundevorschlag',
	'GALLER'							=> 'Galerie',
	'GENDER'							=> 'Geschlecht',
	'GENDER_FEMALE'						=> 'Weiblich',
	'GENDER_MALE'						=> 'Männlich',
	'GENDER_UNKNOWN'					=> 'Unbekannt',
	//'HAS_COMMENT_POST'					=> '%s ha commentato uno <a href="%s">stato</a> di %s',
	//'HAS_COMMENT_HER_POST'				=> '%s ha commentato un suo <a href="%s">stato</a>',
	'HAS_COMMENT_YOUR_POST'				=> '%s hat deine Aktivität kommentiert',
	//'HAS_LIKE_POST'						=> 'A %s piace uno <a href="%s">stato</a> di %s',
	//'HAS_LIKE_HER_POST'					=> 'A %s piace un suo <a href="%s">stato</a>',
	'HAS_LIKE_YOUR_POST'				=> '%s gefällt deine Aktivität',
	//'HAS_PUBLISHED_PHOTO'				=> 'ha pubblicato una foto',
	//'HAS_PUBLISHED_PHOTO_ALBUM'		=> 'has published a photo in %s',
	//'HAS_REG'							=> '%s si è registrato',
	'HAS_SHARED_STATUS'					=> 'hat %s geteilt',
	'HAS_UPLOADED_AVATAR'				=> 'hat ein neues Profilbild hochgeladen',
	'HAS_UPLOADED_COVER'				=> 'hat ein neues Titelbild hochgeladen',
	'HAS_TAGGED_YOU'					=> '%s hat dich in einer Aktivität markiert',
	'HAS_WRITE_IN'						=> 'hat eine Nachricht hinterlassen an der Wand von',
	'HAS_WRITE_IN_YOUR'					=> '%s hat eine Nachricht an deine Wand geschrieben',
	//'HAS_WRITED_ARTICLE'				=> 'has written an article',
	'HAS_WRITED_POST_ON'				=> 'Hat eine Nachricht an %s geschrieben',
	'HAS_WRITED_POST_ON_CANCEL'			=> 'hat einen Beitrag in einem Thema geschrieben',
	//'HIDE_ONLINE'						=> 'Accedi come utente nascosto',
	'HOBBY'								=> array(
		1				=> 'Hobby',
		2				=> 'Hobbies',
	),
	'HOBBIES_INTERESTS'					=> 'Hobbies und Interessen',
	'HOUR'								=> array(
		1				=> 'stunde',
		2				=> 'stunden',
	),
	'INFO'								=> 'Info',
	//'YOU_SEE_ACTIVITY'					=> 'You are looking an activity of %s',
	'LAST_PHOTO'						=> array(
		1				=> 'Letztes Foto',
		2				=> 'Letzte Fotos',
	),
	'LESS'								=> 'Hinterlasse ein',
	'LIKE'								=> array(
		1				=> 'Gefällt mir',
		2				=> 'Gefällt mir',
	),
	'LIKE_ACTIVE'  						=> 'Du magst es',
	'LIKE_TO'							=> 'mag',
	'MINUTE'							=> array(
		1				=> 'minute',
		2				=> 'minuten',
	),
	//'NOBODY_ONLINE'						=> '',
	'NOTIFICATION_PG_SOCIAL'			=> 'Social Benachrichtigungen',
	'NOTIFICATION_TYPE_SOCIAL_STATUS'	=> 'schreibt etwas an die Wand.',
	'NOTIFICATION_TYPE_SOCIAL_COMMENTS'	=> 'kommentiert deinen Beitrag',
	'NOTIFICATION_TYPE_SOCIAL_LIKES'	=> 'gefällt dein Beitrag',
	'NOTIFICATION_TYPE_SOCIAL_TAG'		=> 'hat dich in einer Aktivität markiert',
	//'NOTIFICATION_TYPE_SOCIAL_ZEBRA'	=> '',
	'ONLY_YOU'							=> 'Nur ich',
	'OPTIONS'							=> 'Optionen',
	'OTHER_SOCIALNETWORK'				=> 'Andere soziale Netzwerke',
	'PAGE_CREATE'						=> 'erstelle Seite',
	'PAGE_INSERT_NAME'					=> 'Geben Sie den Namen der Seite ein',
	//'PAGE_MAY_LIKE'						=> '',
	'PAGE_USERNAME'						=> 'Name der Seite',
	'PAGES'								=> 'Seiten',
	'PERSONAL_INFO'						=> 'Persönliche Infos',
	//'PG_SOCIAL_CHAT_DISABLE'			=> 'Disable chat',
	//'PG_SOCIAL_CHAT_SOUND_DISABLE'	=> 'Disable sound when receive new messages on chat',
	'PG_SOCIAL_COMMENT_NEW_LOG'			=> '<strong>hat eine Aktivität kommentiert</strong><br />» %s',
	'PG_SOCIAL_COMMENT_REMOVE_LOG'		=> '<strong>hat seinen Beitrag von seiner Aktivität gelöscht</strong>',
	'PG_SOCIAL_FRIENDS'					=> 'Freunde',
	'PG_SOCIAL_FRIENDS_ACCEPT_REQ'		=> 'Akzeptiere Freundschaftsanfrage',
	'PG_SOCIAL_FRIENDS_ADD'				=> 'Als Freund hinzufügen',
	'PG_SOCIAL_FRIENDS_CANCEL_REQ'		=> 'Lösche Freundschaftsanfrage',
	'PG_SOCIAL_FRIENDS_DECLINE_REQ'		=> 'Freundschaftsanfrage ablehnen',
	'PG_SOCIAL_FRIENDS_REMOVE'			=> 'Freund entfernen',
	//'PG_SOCIAL_STATUS_DELETE'			=> 'Delete activity',
	'PG_SOCIAL_DISLIKE_NEW_LOG'			=> '<strong>Mag die Aktivität nicht mehr</strong><br />» %s',
	'PG_SOCIAL_LIKE_NEW_LOG'			=> '<strong>Mag eine Aktivität</strong><br />» %s',
	'PG_SOCIAL_STATUS_NEW_LOG'			=> '<strong>Hat eine Aktivität veröffentlicht</strong><br />» %s',
	'PG_SOCIAL_STATUS_SHARE_LOG'		=> '<strong>Hat eine Aktivität geteilt</strong><br />» %s',
	'PG_SOCIAL_STATUS_REMOVE_LOG'		=> '<strong>Hat eine Aktivität gelöscht</strong>',
	'PG_SOCIAL_WRITE_A_MESSAGE'					=> 'Schreib eine Nachricht',
	'PG_SOCIAL_WRITE_SOMETHING'					=> 'Schreib etwas',
	'PG_SOCIAL_VERSION'							=> 'Version',
	'PHOTO_DELETE'						=> 'Lösche dieses Foto',
	'PHOTO'								=> array(
		1				=> 'Foto',
		2				=> 'Fotos',
	),
	'PRIVACY_ALL'						=> 'Alle',
	'PRIVACY_ONLY_FRIENDS'				=> 'Freunde',
	'PRIVACY_ONLY_ME'					=> 'Nur ich',
	'PRIVACY_VISIBLE_FOR'				=> 'Sichtbar für',
	'PROFILE_AVATAR_UPDATE'				=> 'Ändere Profilbild',
	'PROFILE_COVER_UPDATE'				=> 'Ändere Titelbild',
	//'PROFILE_NO_FRIEND'					=> '',
	'PROFILE_UPDATE'					=> 'Profil aktualisieren',
	'PUBLIC'							=> 'Senden',
	'QUOTE'								=> 'Zitat',
	'RECENT_DISCUSSIONS'				=> 'Aktuelle Diskussionen',
	//'RENAME'							=> '',
	'SOCIAL_STATU'						=> 'Status',
	'SOCIAL_STATUS_UNKNOW'				=> 'Unbekannt',
	'SOCIAL_STATUS_SINGLE'				=> 'Single',
	'SOCIAL_STATUS_ENGAGED'				=> 'Verlobt',
	'SOCIAL_STATUS_MARRIED'				=> 'Verheiratet',
	'SOCIAL_STATUS_COMPLICATED'			=> 'Ist kompliziert',
	'SOCIAL_STATUS_RELATIONSHIP'		=> 'In einer offenen Beziehung',
	'SECONDS'							=> 'Sekunden',
	'SHARE'								=> 'Teilen',
	'STATUS'							=> 'Status',
	'PG_SOCIAL_SUPPORT_EXT_KOFI'		=> 'Support PG SOCIAL NETWORK on Ko-fi',
	'PG_SOCIAL_WALL'					=> 'Wand',
	'WALL_TIME_AGO'						=> 'vor %1$u %2$s',
	'WALL_TIME_FROM_NOW'			  => 'vor %1$u %2$s',
	'WALL_TIME_PERIODS'				  => array(
		1	 		=> 'sekunden',
		2	 		=> 'minute',
		'SECOND'	 => 'Sekunde',
		'SECONDS'	 => 'Sekunden',
		'MINUTE'	 => 'Minute',
		'MINUTES'	 => 'Minuten',
		'HOUR'		 => 'Stunde',
		'HOURS'		 => 'Stunden',
		'DAY'		 => 'Tag',
		'DAYS'		 => 'Tage',
		'WEEK'		 => 'Woche',
		'WEEKS'		 => 'Wochen',
		'MONTH'		 => 'Monat',
		'MONTHS'	 => 'Monate',
		'YEAR'		 => 'Jahr',
		'YEARS'		 => 'Jahren',
		'DECADE'	 => 'Jahrzehnt',
		'DECADES'	 => 'Jahrzehnten',
	),
));
