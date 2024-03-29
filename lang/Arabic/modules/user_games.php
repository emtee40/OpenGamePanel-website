<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2018 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('OGP_LANG_add_mods_note', "تحتاج إضافة مودز بعد إضافة سيرفر إلى مستخدم . يمكنك عمل ذلك بتعديل السيرفر.");
define('OGP_LANG_game_servers', "سيرفرات الألعاب");
define('OGP_LANG_game_path', "مسار اللعبة");
define('OGP_LANG_game_path_info', "مسار خادم مطلق. مثال:
/home/ogpbot/OGP_User_Files/My_Server");
define('OGP_LANG_game_server_name_info', "اسم السيرفر يساعد المستخدمين على معرفة سيرفراتهم");
define('OGP_LANG_control_password', "التحكم في كلمة المرور");
define('OGP_LANG_control_password_info', "كلمةالمرور هذه تستخدم للتحكم فى السيرفر . مثل كلمة السر RCON . إذا كانت خانة كلمة المرور فارغة هذا يعنى أنها مستخدمة.");
define('OGP_LANG_add_game_home', "أضف سيرفر لعبة");
define('OGP_LANG_game_path_empty', "مسار اللعبة لايمكن أن يكون فارغا");
define('OGP_LANG_game_home_added', "تم إضافة سيرفر اللعبة بنجاح. إعادة توجيه لصفحة الإعدادت.");
define('OGP_LANG_failed_to_add_home_to_db', "أخفقت إضافة الصفحة الرئيسية لقاعدة البيانات .خطأ %s.");
define('OGP_LANG_caution_agent_offline_can_not_get_os_and_arch_showing_servers_for_all_platforms', "<b>الحذر!</b> وكيل غير متواجد حاليا، لا يمكن الحصول على نوع نظام التشغيل والهندسة المعمارية،<br> عرض الخوادم لجميع الأنظمة الأساسية:");
define('OGP_LANG_select_remote_server', "إختر ريموت سيرفر");
define('OGP_LANG_no_remote_servers_configured', "لا يوجد ريموت سيرفر مجهز للبانل .<br> تحتاج إلى ريموت سيرفر قبل أن تسطيع إضافة سيرفرات للمستخدمين");
define('OGP_LANG_no_game_configurations_found', "لم يتم العثور على تهيئة لعبة. تحتاج إلى إضافة تهيئة اللعبة من");
define('OGP_LANG_game_configurations', "> صفحة تهيئة اللعبة");
define('OGP_LANG_add_remote_server', "أضف سيرفر.");
define('OGP_LANG_wine_games', "ألعاب Wine");
define('OGP_LANG_home_path', "مسار ال Home");
define('OGP_LANG_change_home_info', "مكان تثبيت سيرفر اللعبة . مثال:/home/ogp/my_server/");
define('OGP_LANG_game_server_name', "إسم سيرفر لعبة");
define('OGP_LANG_change_name_info', "اسم السيرفر يساعد المستخدمين على معرفة سيرفراتهم");
define('OGP_LANG_game_control_password', "كلمة مرور تحكم اللعبة");
define('OGP_LANG_change_control_password_info', "مثال لكلمة مرور التحكم . rcon password");
define('OGP_LANG_available_mods', "المودات المتاحة");
define('OGP_LANG_note_no_mods', "لا يوجد مود متوفر لهذه اللعبة");
define('OGP_LANG_change_home', "غير ال Home");
define('OGP_LANG_change_control_password', "تغيير كلمة مرور التحكم");
define('OGP_LANG_change_name', "تغيير الإسم");
define('OGP_LANG_add_mod', "أضف مود");
define('OGP_LANG_set_ip', "حدد ip");
define('OGP_LANG_ips_and_ports', "IPs و Ports");
define('OGP_LANG_mod_name', "إسم المود");
define('OGP_LANG_max_players', "الحد الأقصى للاعبين");
define('OGP_LANG_extra_cmd_line_args', "Extra Command Line Args");
define('OGP_LANG_extra_cmd_line_info', "سطر الأوامر الإضافية يوفر وسيلة لإدخال حجج إضافية إلى سطر الأوامر اللعبة عند بدء تشغيله.");
define('OGP_LANG_cpu_affinity', "وحدة المعالجة المركزية متقاربة");
define('OGP_LANG_nice_level', "مستوى لطيف");
define('OGP_LANG_set_options', "ضف خياراً");
define('OGP_LANG_remove_mod', "إمسح المود");
define('OGP_LANG_mods', "مودز");
define('OGP_LANG_ip', "IP");
define('OGP_LANG_port', "Port");
define('OGP_LANG_no_ip_ports_assigned', "يجب إضافة زوج من ال IP:Port لل Home");
define('OGP_LANG_successfully_assigned_ip_port', "تم تعيين IP:PORT كلاهما إلى المنزل بنجاح");
define('OGP_LANG_port_range_error', "يجب أن يكون المنفذ بين النطاق 0 و 65535.");
define('OGP_LANG_failed_to_assing_mod_to_home', "Failed to assing mod with id %d to home.");
define('OGP_LANG_successfully_assigned_mod_to_home', "Successfully assigned mod with id %d to home.");
define('OGP_LANG_successfully_modified_mod', "تم تعديل معلومات التعديل بنجاح.");
define('OGP_LANG_back_to_game_monitor', "العودة إلى مراقب اللعبة");
define('OGP_LANG_back_to_game_servers', "العودة إلى خوادم الألعاب");
define('OGP_LANG_user_id_main', "المالك الأساسى");
define('OGP_LANG_change_user_id_main', "تغير المالك الأساسى");
define('OGP_LANG_change_user_id_main_info', "صاحب المنزل الخادم الرئيسي.");
define('OGP_LANG_server_ftp_password', "كلمة مرور FTP");
define('OGP_LANG_change_ftp_password', "تغيير كلمة مرور FTP");
define('OGP_LANG_change_ftp_password_info', "This is the password to login to FTP server for this home.");
define('OGP_LANG_Delete_old_user_assigned_homes', "إلغاء تعيين المنزل للمستخدمين الحاليين.");
define('OGP_LANG_editing_home_called', "Editing home called");
define('OGP_LANG_control_password_updated_successfully', "تم تحديث كلمة مرور التحكم بنجاح.");
define('OGP_LANG_control_password_update_failed', "فشل تحديث كلمة مرور التحكم");
define('OGP_LANG_successfully_changed_game_server', "تم تغيير خادم اللعبة بنجاح.");
define('OGP_LANG_error_ocurred_on_remote_server', "حدث خطأ في الخادم البعيد ،");
define('OGP_LANG_ftp_password_can_not_be_changed', "لا يمكن تغيير كلمة مرور FTP.");
define('OGP_LANG_ftp_can_not_be_switched_on', "لا يمكن تشغيل FTP.");
define('OGP_LANG_ftp_can_not_be_switched_off', "لا يمكن إيقاف تشغيل FTP.");
define('OGP_LANG_invalid_home_id_entered', "تم إدخال أيدي غير صالح.");
define('OGP_LANG_ip_port_already_in_use', "%s:%s قيد الاستخدام بالفعل. اختر واحد اخر.");
define('OGP_LANG_successfully_assigned_ip_port_to_server_id', "تم التعيين %s بنجاح:%s إلى المنزل مع معرف%s.");
define('OGP_LANG_no_ip_addresses_configured', "ليس لدى خادم اللعبة أي عناوين IP تم تكوينها له. يمكنك تكوينها من");
define('OGP_LANG_server_page', "صفحة السيرفر");
define('OGP_LANG_successfully_removed_mod', "تم حذف مود اللعبة بنجاح.");
define('OGP_LANG_warning_agent_offline_defaulting_CPU_count_to_1', "تحذير - العامل في وضع عدم الاتصال ، وتعيين وحدة المعالجة المركزية الافتراضية إلى 1");
define('OGP_LANG_mod_install_cmds', "Mod Install CMDs");
define('OGP_LANG_cmds_for', "أوامر ل");
define('OGP_LANG_preinstall_cmds', "أوامر التثبيت المسبق");
define('OGP_LANG_postinstall_cmds', "أوامر ما بعد التثبيت");
define('OGP_LANG_edit_preinstall_cmds', "تعديل أوامر التثبيت المسبق");
define('OGP_LANG_edit_postinstall_cmds', "تعديل أوامر ما بعد التثبيت");
define('OGP_LANG_save_as_default_for_this_mod', "Save as default for this mod");
define('OGP_LANG_empty', "فارغ");
define('OGP_LANG_master_server_for_clon_update', "Master server for local update");
define('OGP_LANG_set_as_master_server', "تعيين كخادم رئيسي");
define('OGP_LANG_set_as_master_server_for_local_clon_update', "تعيين كخادم رئيسي للتحديث المحلي.");
define('OGP_LANG_only_available_for', "Only available for '%s' hosted on the remote server named '%s'.");
define('OGP_LANG_ftp_on', "تفعيل FTP");
define('OGP_LANG_ftp_off', "تعطيل FTP");
define('OGP_LANG_change_ftp_account_status', "تغيرر حالة حساب ال FTP");
define('OGP_LANG_change_ftp_account_status_info', "Once a FTP account is enabled or disabled, it is added or removed from the FTP's database.");
define('OGP_LANG_server_ftp_login', "Server FTP Login");
define('OGP_LANG_change_ftp_login_info', "Change the FTP Login with a customized one.");
define('OGP_LANG_change_ftp_login', "Change FTP Login");
define('OGP_LANG_ftp_login_can_not_be_changed', "Can not change FTP Login.");
define('OGP_LANG_server_is_running_change_addresses_not_available', "The server is actually running, the IP cannot be changed.");
define('OGP_LANG_change_game_type', "تغيير نوع اللعبة");
define('OGP_LANG_change_game_type_info', "By changing the game type the current the mods configuration will be deleted.");
define('OGP_LANG_force_mod_on_this_address', "Force mod on this address");
define('OGP_LANG_successfully_assigned_mod_to_address', "Successfully assigned mod to address");
define('OGP_LANG_switch_mods', "Switch mods");
define('OGP_LANG_switch_mod_for_address', "Switch mod for address %s");
define('OGP_LANG_invalid_path', "مسار غير صالح");
define('OGP_LANG_add_new_game_home', "Add new game server");
define('OGP_LANG_no_game_homes_found', "No game servers found");
define('OGP_LANG_available_game_homes', "Available game servers");
define('OGP_LANG_home_id', "Home ID");
define('OGP_LANG_game_server', "Game Server");
define('OGP_LANG_game_type', "نوع العبة");
define('OGP_LANG_game_home', "Home Path");
define('OGP_LANG_game_home_name', "Game Server Name");
define('OGP_LANG_clone', "استنساخ");
define('OGP_LANG_unassign', "إلغاء التعيين");
define('OGP_LANG_access_rights', "حقوق الوصول");
define('OGP_LANG_assigned_homes', "Currently Assigned Homes");
define('OGP_LANG_assign', "تعيين");
define('OGP_LANG_allow_updates', "السماح بتحديثات اللعبة");
define('OGP_LANG_allow_updates_info', "يسمح للمستخدم بتحديث تثبيت اللعبة إذا كان ذلك ممكنًا.");
define('OGP_LANG_allow_file_management', "السماح بإدارة الملفات");
define('OGP_LANG_allow_file_management_info', "Allows user to access the game server with file management modules.");
define('OGP_LANG_allow_parameter_usage', "Allow Parameter Usage");
define('OGP_LANG_allow_parameter_usage_info', "Allows user to change available command line parameters.");
define('OGP_LANG_allow_extra_params', "Allow Extra parametrs");
define('OGP_LANG_allow_extra_params_info', "Allows user to modify extra command line parameters.");
define('OGP_LANG_allow_ftp', "Allow FTP");
define('OGP_LANG_allow_ftp_info', "Show the FTP access information to the user.");
define('OGP_LANG_allow_custom_fields', "السماح بالحقول المخصصة");
define('OGP_LANG_allow_custom_fields_info', "Allows user to access custom fields of the game server if any.");
define('OGP_LANG_select_home', "Select Home to Assign");
define('OGP_LANG_assign_new_home_to_user', "Assign New Home to user %s");
define('OGP_LANG_assign_new_home_to_group', "Assign New Home to group %s");
define('OGP_LANG_assigned_home_to_user', "Successfully assigned home (ID: %d) to user %s.");
define('OGP_LANG_failed_to_assign_home_to_user', "Failed to assign home (ID: %d) to user %s.");
define('OGP_LANG_assigned_home_to_group', "Successfully assigned home (ID: %d) to group %s.");
define('OGP_LANG_unassigned_home_from_user', "Successfully unassigned home (ID: %d) from user %s.");
define('OGP_LANG_unassigned_home_from_group', "Successfully unassigned home (ID: %d) from group %s.");
define('OGP_LANG_no_homes_assigned_to_user', "No homes assigned for user %s.");
define('OGP_LANG_no_homes_assigned_to_group', "No homes assigned for group %s.");
define('OGP_LANG_no_more_homes_available_that_can_be_assigned_for_this_user', "No more homes available that can be assigned for this user");
define('OGP_LANG_no_more_homes_available_that_can_be_assigned_for_this_group', "No more homes available that can be assigned for this group");
define('OGP_LANG_you_can_add_a_new_game_server_from', "يمكنك إضافة خادم لعبة جديد من %s.");
define('OGP_LANG_no_remote_servers_available_please_add_at_least_one', "There are no remote servers available, please add at least one!");
define('OGP_LANG_cloning_of_home_failed', "Cloning of home with id '%s' failed.");
define('OGP_LANG_no_mods_to_clone', "No enabled mod(s) for this game yet. None will be cloned.");
define('OGP_LANG_failed_to_add_mod', "Failed to add mod with id '%s' to home with id '%s'.");
define('OGP_LANG_failed_to_update_mod_settings', "Failed to update mod settings for home with id '%s'.");
define('OGP_LANG_successfully_cloned_mods', "Successfully cloned mods for home with id '%s'.");
define('OGP_LANG_successfully_copied_home_database', "Successfully copied home database.");
define('OGP_LANG_copying_home_remotely', "Copying the home on remote server from '%s' to '%s'.");
define('OGP_LANG_cloning_home', "Cloning home called '%s'");
define('OGP_LANG_current_home_path', "Current home path");
define('OGP_LANG_current_home_path_info', "The current location of the copied home on remote server.");
define('OGP_LANG_clone_home', "Clone Home");
define('OGP_LANG_new_home_name', "New Home Name");
define('OGP_LANG_new_home_path', "New Home Path");
define('OGP_LANG_agent_ip', "أي بي الوكيل");
define('OGP_LANG_game_server_copy_is_running', "نسخة خادم اللعبة قيد التشغيل ...");
define('OGP_LANG_game_server_copy_was_successful', "تم نسخ خادم اللعبة بنجاح");
define('OGP_LANG_game_server_copy_failed_with_return_code', "Game server copy failed with return code %s");
define('OGP_LANG_clone_mods', "Clone Mods");
define('OGP_LANG_game_server_owner', "مالك خادم اللعبة");
define('OGP_LANG_the_name_of_the_server_to_help_users_to_identify_it', "The name of the server to help users to identify it.");
define('OGP_LANG_ips_and_ports_used_in_this_home', "IPs and Ports used in this home");
define('OGP_LANG_note_ips_and_ports_are_not_cloned', "Note - IPs and Ports are not cloned");
define('OGP_LANG_mods_and_settings_for_this_game_server', "Mods and settings for this game server");
define('OGP_LANG_sure_to_delete_serverid_from_remoteip_and_directory', "Are you sure you want to delete game server (ID: %s) from server %s and is in directory %s");
define('OGP_LANG_yes_and_delete_the_files', "نعم واحذف الملفات");
define('OGP_LANG_failed_to_remove_gamehome_from_database', "Failed to remove gamehome from database.");
define('OGP_LANG_successfully_deleted_game_server_with_id', "تم حذف خادم اللعبة بالمعرف %s بنجاح.");
define('OGP_LANG_failed_to_remove_ftp_account_from_remote_server', "Failed to remove FTP account from remote server.");
define('OGP_LANG_remove_it_anyway', "هل ترغب في إزالته على أي حال؟");
define('OGP_LANG_sucessfully_deleted', "تم حذف %s بنجاح");
define('OGP_LANG_the_agent_had_a_problem_deleting', "The Agent had a problem while deleting %s. Please, check the Agent's log.");
define('OGP_LANG_connection_timeout_or_problems_reaching_the_agent', "Connection timeout or problems with reaching the Agent");
define('OGP_LANG_does_not_exist_yet', "غير موجود بعد.");
define('OGP_LANG_update_settings', "تحديث الاعدادات");
define('OGP_LANG_settings_updated', "تم تحديث الإعدادات.");
define('OGP_LANG_selected_path_already_in_use', "المسار المحدد قيد الاستخدام بالفعل.");
define('OGP_LANG_browse', "تصفح");
define('OGP_LANG_cancel', "إلغاء");
define('OGP_LANG_set_this_path', "تعيين هذا المسار");
define('OGP_LANG_select_home_path', "Select home path");
define('OGP_LANG_folder', "مجلد");
define('OGP_LANG_owner', "المالك");
define('OGP_LANG_group', "مجموعة");
define('OGP_LANG_level_up', "المستوى الأعلى");
define('OGP_LANG_level_up_info', "العودة إلى المجلد السابق.");
define('OGP_LANG_add_folder', "أضف مجلد");
define('OGP_LANG_add_folder_info', "Write the name for the new folder, then click on the icon.");
define('OGP_LANG_valid_user', "من فضلك حدد مستخدم صالح");
define('OGP_LANG_valid_group', "من فضلك حدد مجموعة صالحة");
define('OGP_LANG_set_affinity', "اضبط تقارب الخادم");
define('OGP_LANG_cpu_affinity_info', "Select the CPU core(s) you want to assign to the game server.");
define('OGP_LANG_expiration_date_changed', "Expiration date for selected home has been changed.");
define('OGP_LANG_expiration_date_could_not_be_changed', "Expiration date for selected home could not be changed.");
define('OGP_LANG_search', "بحث");
define('OGP_LANG_ftp_account_username_too_long', "FTP username is too long. Try a shorter username no longer than 20 characters.");
define('OGP_LANG_ftp_account_password_too_long', "FTP password is too long. Try a shorter password no longer than 20 characters.");
define('OGP_LANG_other_servers_exist_with_path_please_change', "Other homes exist with the same path. It is recommended (but not required) that you change this path to something unique. You may have problems if you do NOT.");
define('OGP_LANG_change_access_rights_for_selected_servers', "تغيير حقوق الوصول للخوادم المحددة");
?>
