<?php
namespace docker {
	function adminer_object() {
		require_once('plugins/plugin.php');

		class Adminer extends \AdminerPlugin {

            function homepage() {
                echo '<p class="links">' . ($_GET["ns"] == "" && support("database") ? '<a href="' . h(ME) . 'database=">' . lang('Alter database') . "</a>\n" : "");
                echo (support("scheme") ? "<a href='" . h(ME) . "scheme='>" . ($_GET["ns"] != "" ? lang('Alter schema') : lang('Create schema')) . "</a>\n" : "");
                echo ($_GET["ns"] !== "" ? '<a href="' . h(ME) . 'schema=">' . lang('Database schema') . "</a>\n" : "");
                echo (support("privileges") ? "<a href='" . h(ME) . "privileges='>" . lang('Privileges') . "</a>\n" : "");

                echo "<a href='/demo.sql'>  DEMO.sql </a>\n";

                return true;
            }


			function _callParent($function, $args) {
				if ($function === 'loginForm') {
					ob_start();
					$return = \Adminer::loginForm();
					$form = ob_get_clean();

					echo str_replace('name="auth[server]" value="" title="hostname[:port]"', 'name="auth[server]" value="'.($_ENV['ADMINER_DEFAULT_SERVER'] ?: 'db').'" title="hostname[:port]"', $form);

					return $return;
				}

				return parent::_callParent($function, $args);
			}
		}

		$plugins = [];
		foreach (glob('plugins-enabled/*.php') as $plugin) {
			$plugins[] = require($plugin);
		}

		return new Adminer($plugins);
	}
}

namespace {
	if (basename($_SERVER['DOCUMENT_URI']) === 'adminer.css' && is_readable('adminer.css')) {
		header('Content-Type: text/css');
		readfile('adminer.css');
		exit;
	}

	function adminer_object() {
		return \docker\adminer_object();
	}

	require('adminer.php');
}
