<?php # $Id: serendipity_plugin_userprofiles.php,v 1.7 2007/05/24 14:04:27 garvinhicking Exp $

# (c) by Falk D�ring


if (IN_serendipity !== true) {
    die ("Don't hack!");
}

// Probe for a language include with constants. Still include defines later on, if some constants were missing
$probelang = dirname(__FILE__) . '/' . $serendipity['charset'] . 'lang_' . $serendipity['lang'] . '.inc.php';
if (file_exists($probelang)) {
    include $probelang;
}

include dirname(__FILE__) . '/lang_en.inc.php';

class serendipity_plugin_userprofiles extends serendipity_plugin {

    function introspect(&$propbag) {
        $propbag->add('name',        PLUGIN_USERPROFILES_NAME);
        $propbag->add('description', PLUGIN_USERPROFILES_NAME_DESC);
        $propbag->add('author',      "Falk D�ring");
        $propbag->add('stackable',   false);
        $propbag->add('version',     '1.2');
        $propbag->add('configuration', array('title', 'show_groups', 'show_users'));
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '4.1.0'
        ));
        $propbag->add('groups',       array('FRONTEND_VIEWS'));
        $this->dependencies = array('serendipity_event_userprofiles' => 'keep');
    }

    function introspect_config_item($name, &$propbag) {
        switch($name) {
            case 'title':
                $propbag->add('type',        'string');
                $propbag->add('name',        PLUGIN_USERPROFILES_TITLE);
                $propbag->add('description', PLUGIN_USERPROFILES_TITLE_DESC);
                $propbag->add('default',     PLUGIN_USERPROFILES_TITLE_DEFAULT);
                break;

            case 'show_groups':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_USERPROFILES_SHOWGROUPS);
                $propbag->add('description', PLUGIN_USERPROFILES_SHOWGROUPS);
                $propbag->add('default',     true);
                break;

            case 'show_users':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        PLUGIN_USERPROFILES_SHOWAUTHORS);
                $propbag->add('description', PLUGIN_USERPROFILES_SHOWAUTHORS);
                $propbag->add('default',     true);
                break;

            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title) {
        global $serendipity;

        $title = $this->get_config('title');

        if (serendipity_db_bool($this->get_config('show_users'))) {
            echo $this->displayUserList();
        }

        if (serendipity_db_bool($this->get_config('show_groups'))) {
            echo "<br />\n";
            echo '<a href="' . $serendipity['baseURL'] . $serendipity['indexFile'] . '?/serendipity[subpage]=userprofiles">' . USERCONF_GROUPS . '</a>';
        }
    }

    function displayUserList() {
        global $serendipity;

        $userlist = serendipity_fetchUsers();

        $content = "";
        foreach($userlist AS $user) {
            if (function_exists('serendipity_authorURL')) {
                $entryLink = serendipity_authorURL($user);
            } else {
            	$entryLink = serendipity_rewriteURL(
                               PATH_AUTHORS . '/' .
                               serendipity_makePermalink(
                                 PERM_AUTHORS,
                                 array(
                                   'id'    => $user['authorid'],
                                   'title' => $user['realname']
                                 )
                               )
                             );
            }

            $content .= sprintf("<a href=\"%s\" title=\"%s\">%s</a><br />\n",
                      $entryLink,
                      htmlspecialchars($user['realname']),
                      htmlspecialchars($user['realname']));
        }

        return $content;
    }
}
?>