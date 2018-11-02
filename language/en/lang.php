<?php
/**
 *
 * PGreca Social extension for phpBB.
 *
 * @copyright (c) 2015 pgreca <http://www.livemembersonly.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */
 
if(!defined('IN_PHPBB'))
{
	exit;
}
if(empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(	
	'ABOUT_HOUR'						=> '1 hour',
	'ABOUT_HOURS'						=> 'hours',
	'ABOUT_MONTH'						=> '1 month',
	'ABOUT_MONTHS'						=> 'months',
	'ACTIVITY'							=> 'Activity',
	'ACTIVITY_PAGE'						=> 'Page Activity',
	'AGO'								=> 'ago',
	'ALL'								=> 'All',
	'APPROVE_PAGE'						=> 'Approve',
	'ARE_YOU_SURE'						=> 'This activity will be deleted and you will not be able to find it. Confirm?',
	'ARE_YOU_SURE_PHOTO'				=> 'This photo will be deleted and you will not be able to find it. Confirm?',
	'ATTACH_PICTURE'					=> 'Attach picture',
	'PG_SOCIAL_AVATAR'					=> 'Avatar',
	'COMMENT'							=> array(
		0				=> 'No comment',
		1				=> 'Comment',
		2				=> 'Comments',
	),
	'COMMENT_THIS_ACTIVITY'				=> 'Comment this post!',
	'PG_SOCIAL_COVER'				=> 'Cover photo',
	'DAY'								=> array(
		1	=> 'day',
		2	=> 'days',
	),
	'DO_YOU_WANT_SHARE'					=> 'Do you want share this activity?',
	'EDIT'								=> 'Edit',
	'EDIT_PROFILE'						=> 'Edit profile',
	'FRIEND'							=> array(
		1				=> 'Friend',
		2				=> 'Friends',
	),
	'GALLER'							=> 'Gallery',
	'GENDER'							=> 'Gender',
	'GENDER_FEMALE'						=> 'Female',
	'GENDER_MALE'						=> 'Male',
	'GENDER_UNKNOWN'					=> 'Unknown',
	'HAS_COMMENT_YOUR_POST'				=> '%s ha commented an activity',
	'HAS_LIKE_YOUR_POST'				=> '%s likes a your activity',
	'HAS_SHARED_STATUS'					=> 'has shared a %s',
	'HAS_UPLOADED_AVATAR'				=> 'has uploaded a new profile picture',
	'HAS_UPLOADED_COVER'				=> 'has uploaded a new cover picture',
	'HAS_TAGGED_YOU'					=> '%s tagged you in an activity',
	'HAS_WRITE_IN'						=> 'has written on the wall of',
	'HAS_WRITE_IN_YOUR'					=> '%s has written on your wall',
	'HAS_WRITED_POST_ON'				=> 'has written a post on %s',
	'HAS_WRITED_POST_ON_CANCEL'			=> 'has witten a post on a topic',
	'INFO'								=> 'Info',
	'LESS'								=> 'less than',
	'LIKE'								=> array(
		1				=> 'Like',
		2				=> 'Likes',
	),
	'LIKE_ACTIVE'  						=> 'You like it',
	'LIKE_TO'							=> 'Like to',
	'MINUTES'							=> 'minutes',
	
	'NOTIFICATION_PG_SOCIAL'			=> 'Social notifications',
	'NOTIFICATION_TYPE_SOCIAL_STATUS'	=> 'is writing something on the wall',
	'NOTIFICATION_TYPE_SOCIAL_COMMENTS'	=> 'is commenting your post',
	'NOTIFICATION_TYPE_SOCIAL_LIKES'	=> 'like your post',
	'NOTIFICATION_TYPE_SOCIAL_TAG'		=> 'tagged in an activity',
	'ONLY_YOU'							=> 'Only you',
	'OPTIONS'							=> 'Options',
	'PAGE_CREATE'						=> 'Create page',
	'PAGE_INSERT_NAME'					=> 'Insert the name of the page',
	'PAGE_USERNAME'						=> 'Page name',
	'PAGES'								=> 'Pages',
	'PG_SOCIAL_COMMENT_NEW_LOG'			=> '<strong>Has commented an activity</strong><br />» %s',
	'PG_SOCIAL_COMMENT_REMOVE_LOG'		=> '<strong>Has deleted a his comment from an activity</strong>',
	'PG_SOCIAL_FRIENDS'					=> 'Friends',
	'PG_SOCIAL_FRIENDS_ACCEPT_REQ'		=> 'Accept friend request',
	'PG_SOCIAL_FRIENDS_ADD'				=> 'Add as friend',
	'PG_SOCIAL_FRIENDS_CANCEL_REQ'		=> 'Delete friend request',
	'PG_SOCIAL_FRIENDS_DECLINE_REQ'		=> 'Refuse friend request',
	'PG_SOCIAL_FRIENDS_REMOVE'			=> 'Remove friend',
	'PG_SOCIAL_DISLIKE_NEW_LOG'			=> '<strong>Not likes more an activity</strong><br />» %s',
	'PG_SOCIAL_LIKE_NEW_LOG'			=> '<strong>Likes an activity</strong><br />» %s',
	'PG_SOCIAL_STATUS_NEW_LOG'			=> '<strong>Has published an activity</strong><br />» %s',
	'PG_SOCIAL_STATUS_SHARE_LOG'		=> '<strong>Has shared an activity</strong><br />» %s',
	'PG_SOCIAL_STATUS_REMOVE_LOG'		=> '<strong>Has deleted an activity</strong>',
	'PHOTO_DELETE'						=> 'Delete this photo',
	'PHOTOS'							=> 'Pictures',	
	'PRIVACY_ALL'						=> 'All',
	'PRIVACY_ONLY_FRIENDS'				=> 'Friends',
	'PRIVACY_ONLY_ME'					=> 'Only me',	
	'PRIVACY_VISIBLE_FOR'				=> 'Visible for',
	'PROFILE_AVATAR_UPDATE'				=> 'Change Profile picture',
	'PROFILE_COVER_UPDATE'				=> 'Change Cover picture',
	'PROFILE_UPDATE'					=> 'Update profile',
	'PUBLIC'							=> 'Post',
	'QUOTE'								=> 'Quote',
	'SECONDS'							=> 'seconds',
	'SHARE'								=> 'Share',
	'STATUS'							=> 'status',
	'PG_SOCIAL_SUPPORT_EXT_KOFI'		=> 'Support PG SOCIAL NETWORK on Ko-fi',
	'PG_SOCIAL_WALL'					=> 'Wall',
	'WALL_TIME_AGO'						=> '%1$u %2$s ago',
	'WALL_TIME_FROM_NOW'			  => '%1$u %2$s ago',
	'WALL_TIME_PERIODS'				  => array(
		'SECOND'	 => 'second',
		'SECONDS'	 => 'seconds',
		'MINUTE'	 => 'minute',
		'MINUTES'	 => 'minutes',
		'HOUR'		 => 'hour',
		'HOURS'		 => 'hours',
		'DAY'		 => 'day',
		'DAYS'		 => 'days',
		'WEEK'		 => 'week',
		'WEEKS'		 => 'weeks',
		'MONTH'		 => 'month',
		'MONTHS'	 => 'months',
		'YEAR'		 => 'year',
		'YEARS'		 => 'years',
		'DECADE'	 => 'decade',
		'DECADES'	 => 'decades',
	),
	'PG_SOCIAL_WRITE_A_MESSAGE'					=> 'Write a message',
	'PG_SOCIAL_WRITE_SOMETHING'					=> 'Write something',
	'PG_SOCIAL_VERSION'							=> 'Version',
));