<?php
/**
 *
 * Copyright (C) 2011 Aldrin Edison Baroi
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the 
 *     Free Software Foundation, Inc.,
 *     51 Franklin Street, Fifth Floor
 *     Boston, MA 02110-1301, USA.
 *     http://www.gnu.org/copyleft/gpl.html
 *
 * NOTE: *** RECOMMENDATION: DO NOT MODIFY THIS FILE ***
 *       Put your site specific settings in the "SiteSpecificConfigurations.php" file
 *       
 */

if (!defined('MEDIAWIKI'))
{
	echo("This is an extension to the MediaWiki package and cannot be run standalone.\n");
	exit( 1 );
} 

# ---------------------------------------------------------------------------
# Show user's real name
# ---------------------------------------------------------------------------
#
# By default, user's real name is displayed if available.
# 
$wgPageAttachment_showUserRealName = true;

# ---------------------------------------------------------------------------
# Allowed namespaces
# ---------------------------------------------------------------------------
# 
# You can specify which MediaWiki namespace pages can have attachments.
#
# By default, attachments are allowed to be attached to pages contained in the
# main namespace only.      
#
$wgPageAttachment_allowedNameSpaces[] = NS_MAIN; 

# ---------------------------------------------------------------------------
# Date Format
# ---------------------------------------------------------------------------
# You can specify language specific date formatting option.
# Example: $wgPageAttachment_dateFormat['langCode'] = 'dateformat'
#
# For date format string patterns, consult PHP DateTime class documentaion.
#
# Date formatting is based on MediaWiki settings. The following specific date
# format is for English language only and more readable than 24HR format used
# by MediaWiki. However, you can disable this and use MediaWiki formatting by 
# unsetting $wgPageAttachment_dateFormat variable.
#
$wgPageAttachment_dateFormat['en'] = 'M d, Y h:i a';

# ---------------------------------------------------------------------------
# CSS File
# ---------------------------------------------------------------------------
# You can either specify skin specific CSS file or, override the default or,
# both. For skin spcific settings, specify skin name, instead of 'default'.
#
$wgPageAttachment_cssFileCommon['default'] = 'common.css';
$wgPageAttachment_cssFileLTR['default']    = 'ltr-lang.css';
$wgPageAttachment_cssFileRTL['default']    = 'rtl-lang.css';

# ---------------------------------------------------------------------------
# Image Files
# ---------------------------------------------------------------------------
# You can either specify skin specific image file or, override the default or,
# both. For skin spcific settings, specify skin name, instead of 'default'.
#
$wgPageAttachment_imgSpacer['default']             = 'transparent-16x16.png';
$wgPageAttachment_imgBrowseSearchAttach['default'] = 'tango-folder-saved-search-16x16.png';
$wgPageAttachment_imgUploadAndAttach['default']    = 'tango-mail-attachment-16x16.png';
$wgPageAttachment_imgAttachFile['default']         = 'tango-mail-attachment-16x16.png';
$wgPageAttachment_imgRemoveAttachment['default']   = 'tango-edit-cut-16x16.png';
$wgPageAttachment_imgViewAuditLog['default']       = 'tango-edit-find-16x16.png';
$wgPageAttachment_imgViewHistory['default']        = 'tango-system-file-manager-16x16.png';
$wgPageAttachment_imgViewMore['default']           = 'tango-go-jump-12x12.png';

# ---------------------------------------------------------------------------
# Attachment list display section
# ---------------------------------------------------------------------------
#
# :: Columns to Display ::
#
# Currently the following columns are available for display & by default all
# are displayed. You can cusotmize the display columns do the follwing:
#   1. To remove a column
#        1.1 Unset $wgPageAttachment_colToDisplay[] 
#               Examle: unset($wgPageAttachment_colToDisplay);
#        1.2 Set the columns to be displayed
#        1.3 Set the column widths $wgPageAttachment_colWidth[] so that the 
#            sum of the column withds add up to 100
#        1.4 Ensure that title row's column span total match total number of
#            columns going to be displayed
#   2. To change the order of the columns
#        The columns are displayed in the sequence added to $wgPageAttachment_colToDisplay.
#        So, to change the display order, specify the column names in the sequence
#        you would like them to be displayed.
#
$wgPageAttachment_colToDisplay[] = 'Name';
$wgPageAttachment_colToDisplay[] = 'Description';
$wgPageAttachment_colToDisplay[] = 'Size';
$wgPageAttachment_colToDisplay[] = 'DateUploaded';
$wgPageAttachment_colToDisplay[] = 'UploadedBy';
$wgPageAttachment_colToDisplay[] = 'Buttons';

#
# :: Colum Widths ::
#
# You can either specify skin & language specific column widths or, override 
# the default or, both. For skin spcific settings, specify skin name, instead
# of 'default'.  Similarly, for language specific settings, specify language
# code instead of 'default'.
#
#   $wgPageAttachment_colWidth['Skin Name']['Language Code']['Column Name']
#
# -- Header & Attachment List Rows --
#
$wgPageAttachment_colWidth['default']['default']['Name'        ] = 34;
$wgPageAttachment_colWidth['default']['default']['Description' ] = 23;
$wgPageAttachment_colWidth['default']['default']['Size'        ] = 10; 
$wgPageAttachment_colWidth['default']['default']['DateUploaded'] = 14;
$wgPageAttachment_colWidth['default']['default']['UploadedBy'  ] = 14;
$wgPageAttachment_colWidth['default']['default']['Buttons'     ] = 7;  
 
//
// For your refrence, here are the column widths before "description"
// column was added.
//
//$wgPageAttachment_colWidth['default']['default']['Name'        ] = 53;
//$wgPageAttachment_colWidth['default']['default']['Size'        ] = 10;  
//$wgPageAttachment_colWidth['default']['default']['DateUploaded'] = 15; 
//$wgPageAttachment_colWidth['default']['default']['UploadedBy'  ] = 15; 
//$wgPageAttachment_colWidth['default']['default']['Buttons'     ] = 7;  
//

#
# :: Title Row Column Spans ::
#
# The title row has three columns.  So, to match total number of columns being
# displayed, "span" must be used.  If you change the number of column being
# displayed, change the column span values so that the total match the total
# number of columns to be displayed.
#
$wgPageAttachment_titleRowColSpan['default']['default']['Title'          ] = 3;
$wgPageAttachment_titleRowColSpan['default']['default']['DisplayTimeZone'] = 2;
$wgPageAttachment_titleRowColSpan['default']['default']['Buttons'        ] = 1;

#
# :: Attachment Name Column
#
# To keep the display clean, the following is setting is used to detemine the
# number of characters to display.  If the attachment name is longer than the
# maximum length specified, the name is trimed and elipses are used indicate that
# the ....
#
$wgPageAttachment_attachmentNameMaxLength = 55;

#
# :: Description Column ::
#
# To keep the display clean, the following setting is used to detemine the
# number of characters to display.  If the description is longer than the
# maximum length specified, the description is trimed and a popup is used 
# to display the whole description.
# 
$wgPageAttachment_descriptionMaxLength = 35;

#
# :: Description Popup ::
#
# Use the following to change the width & height of the description popup.
#
$wgPageAttachment_descriptionPopupWidth  = '50em';
$wgPageAttachment_descriptionPopupHeight = '7em';

# ---------------------------------------------------------------------------
# Status Message Format
# ---------------------------------------------------------------------------
# You can either specify skin specific message format or, override the default
# or, both. For skin spcific settings, specify skin name, instead of 'default'.
#
# STATUS_MESSAGE will be replaced with actual status message
#
$wgPageAttachment_statusMessageFormat['default'] = '&nbsp;&#187; STATUS_MESSAGE &#171;&nbsp;';

# ---------------------------------------------------------------------------
# Audit Log
# ---------------------------------------------------------------------------
#
# Audit log captures all attachments related activities.
#
# By default, audit logging is turned off.  
#
# To turn audit logging on, do the following:
#    1. First, set $wgPageAttachment_enableAuditLog = true, in the 
#       "SiteSpecificConfigurations.php" file
#    2. Second, run MediaWiki "update.php" maintenance program to create
#       audit log tables
#
$wgPageAttachment_enableAuditLog = false;

# ---------------------------------------------------------------------------
# Permissions
# ---------------------------------------------------------------------------
#
# First, MediaWiki upload permissions are checked.
# Second, the following permissions & the overrides are checked.
#
# By default, anybody can view the attachments.  Login is required 
# and only "sysop" & "user" groups are allowed to add/update/download/
# remove the attachments and view the audit log (if audit logging is
# enabled).
#
# By default, if audit logging is enable, when login is not required,
# anybody can view the audit log, and when login is required, only "sysop"
# and "user" groups are allowed to view the audit logs.
#
# View must be permitted to allowed all other actions
# 
$wgPageAttachment_permissions['view'           ]['loginRequired'] = false;
$wgPageAttachment_permissions['uploadAndAttach']['loginRequired'] = true;
$wgPageAttachment_permissions['browseSearch'   ]['loginRequired'] = true;
$wgPageAttachment_permissions['remove'         ]['loginRequired'] = true;
$wgPageAttachment_permissions['download'       ]['loginRequired'] = true;
$wgPageAttachment_permissions['viewAuditlog'   ]['loginRequired'] = true;
$wgPageAttachment_permissions['viewHistory'    ]['loginRequired'] = true;
#
# :: When login is not required ::
#
$wgPageAttachment_permissions['view'           ]['allowed'] = true;
$wgPageAttachment_permissions['uploadAndAttach']['allowed'] = true;
$wgPageAttachment_permissions['browseSearch'   ]['allowed'] = true;
$wgPageAttachment_permissions['remove'         ]['allowed'] = true;
$wgPageAttachment_permissions['download'       ]['allowed'] = true;
$wgPageAttachment_permissions['viewAuditLog'   ]['allowed'] = true;
$wgPageAttachment_permissions['viewHistory'    ]['allowed'] = true;
#
# :: When login is required - Group Permission ::
#
$wgPageAttachment_permissions['view'           ]['group']['sysop'] = true;
$wgPageAttachment_permissions['uploadAndAttach']['group']['sysop'] = true;
$wgPageAttachment_permissions['browseSearch'   ]['group']['sysop'] = true;
$wgPageAttachment_permissions['remove'         ]['group']['sysop'] = true;
$wgPageAttachment_permissions['download'       ]['group']['sysop'] = true; 
$wgPageAttachment_permissions['viewAuditLog'   ]['group']['sysop'] = true;
$wgPageAttachment_permissions['viewHistory'    ]['group']['sysop'] = true;
$wgPageAttachment_permissions['view'           ]['group']['user' ] = true;
$wgPageAttachment_permissions['uploadAndAttach']['group']['user' ] = true;
$wgPageAttachment_permissions['browseSearch'   ]['group']['user' ] = true;
$wgPageAttachment_permissions['remove'         ]['group']['user' ] = true;
$wgPageAttachment_permissions['download'       ]['group']['user' ] = true;
$wgPageAttachment_permissions['viewAuditLog'   ]['group']['user' ] = true;
$wgPageAttachment_permissions['viewHistory'    ]['group']['user' ] = true;
$wgPageAttachment_permissions['view'           ]['group']['*'    ] = true; 
$wgPageAttachment_permissions['uploadAndAttach']['group']['*'    ] = false;
$wgPageAttachment_permissions['browseSearch'   ]['group']['*'    ] = false;
$wgPageAttachment_permissions['remove'         ]['group']['*'    ] = false;
$wgPageAttachment_permissions['download'       ]['group']['*'    ] = false;
$wgPageAttachment_permissions['viewAuditLog'   ]['group']['*'    ] = false;
$wgPageAttachment_permissions['viewHistory'    ]['group']['*'    ] = false;
#
# :: When login is required - User Specific Permission ::
#
# Use the following format to add user specific permissions.
#
# $wgPageAttachment_permissions['remove'      ]['user']['admin' ] = true;

# ---------------------------------------------------------------------------
# Attachment Removal - Permanently
# ---------------------------------------------------------------------------
#
# Attachment files are not permanently deleted from MediaWiki's file repository
# when attachments are removed from a page for the following reasons:
#    1. By default, MediaWiki only allow user's with admin rights to delete a file
#    2. The file maybe attached to other pages
#    3. The file maybe embedded in a Wiki page
#
# To allow permanent file deletion of a file, do the following:
#    1. Allow user to delete file through MediaWiki permission settings
#       See: http://www.mediawiki.org/wiki/Manual:User_rights
#    2. Set $wgPageAttachment_removeAttachments['permanently'] = true to
#       allow file deletion.  Please, note that if the file is attached to
#       other pages or, embedded in a page through file or media link, then
#       file removal request will not honored.
#    3. Set $wgPageAttachment_removeAttachments['ignoreIfAttached'] to true
#       to allow removal of a file even it is attached to another page.
#    4. Set $wgPageAttachment_removeAttachments['ignoreIfEmbedded'] to true
#       to allow removal of a file even it is embedded in a page through a
#       file or media link.
#
$wgPageAttachment_removeAttachments['permanently']      = false;
$wgPageAttachment_removeAttachments['ignoreIfEmbedded'] = false;
$wgPageAttachment_removeAttachments['ignoreIfAttached'] = false;

# ---------------------------------------------------------------------------
# Server Cache - Page Attachment List & Other Data 
# ---------------------------------------------------------------------------
#
# PageAttachment extension uses cache to store page attachment list and other
# data. 
#
# By default MediaWiki cache is used.  Consult MediaWiki cache setup 
# documentation to choose and setup cache appropriate for your installation.  
#
# ** RECOMMENDATION: Whenever possible setup & use MediaWiki's cache.
#
# For small installation, you can choose not to use any cache.  In this case, 
# no configuration changes for MediaWiki cache is necessary.
#
# For medium to large installation, it is recommended to use some form of
# caching.  Specifically, use one of the caching options provided by MediaWiki.
#
# For [[single server]] installation, you can choose to use Page Attachment
# extension's internal cache implementations, either SQLite3 or Database 
# (MediaWiki). To use the internal cache implementation, override the following
# in the SiteSpecificConfigurations.php file. For SQLite3 cache implementation,
# set the cache directory.  Make sure the web server has read & write permissions
# to that directory. For Database (MediaWiki), the tables would be created as
# part of the database setup.
#
# ** Note ** : List caching will sometime display incosistent data to users 
#              other than the user performing the add/update/remove action.
#
# $wgPageAttachment_internalCacheType = 'SQLite3' or 'Database'
# $wgPageAttachment_sqlite3CacheDirectory = 'provide absolute path'
#
$wgPageAttachment_useInternalCache = false;
$wgPageAttachment_internalCacheType = '';
$wgPageAttachment_sqlite3CacheDirectory = '';

# ---------------------------------------------------------------------------
# Browser Cache - Page Attachment List
# ---------------------------------------------------------------------------
#
# Ajax is used to load the page attachment list.  By default Ajax data caching
# in user's web browser is disabled. 
#
# ** NOTE **: Caching the list will sometime display inconsistent data based 
#             on when an attachment was added/update/removed and after user's
#             login/logout.
#
# duration value = 0  :: Disable Browser caching of Ajax data
# duration value > 0  :: Number of seconds to cache Ajax data in the user's browser
#
# Default duration: 0 seconds
#
$wgPageAttachment_ajaxCacheDuration = 0;

## ::END ::
