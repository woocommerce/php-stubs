<?php
/**
 * Generated stub declarations for admin-tools-for-woocommerce 2.1.1.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace TIV_WOOAT\Abstracts {
    abstract class Hookable implements \TIV_WOOAT\Dependencies\TIVWP\InterfaceHookable
    {
    }
}
namespace TIV_WOOAT\Admin {
    /**
     * Class StatusReport
     *
     * A section under WooCommerce > Status, which is where support questions are
     * actually answered from. Everything here was previously either invisible or
     * only readable by asking somebody to screenshot a settings header - and a
     * screenshot cannot be searched, quoted or diffed against the next one.
     *
     * WHY THIS IS THE RIGHT HOME FOR THE DIAGNOSTICS. The settings screens are for
     * deciding; this is for explaining. "Blocks currently in the file" is the clearest
     * example: as a permanent line above the Security tab it is a list of internal
     * names the site owner cannot act on, and as a row here it is the first thing
     * worth knowing when a rule is not doing what the settings claim. The WooCommerce
     * "Get system report" button copies the whole table to the clipboard, so it
     * arrives in a support ticket as text.
     *
     * @since 2.0.0
     */
    class StatusReport extends \TIV_WOOAT\Dependencies\TIVWP\WC\AbstractStatusReport
    {
        /**
         * Render the report.
         *
         * @since 2.0.0
         * @internal action.
         *
         * @return void
         */
        public function action__woocommerce_system_status_report()
        {
        }
        /**
         * Add the environment facts, and remove anything secret.
         *
         * @since 2.0.0
         * @internal filter.
         *
         * @param array $options Option name (prefix stripped) => value.
         *
         * @return array
         */
        public function filter__tivwp_wc_status_report_options($options)
        {
        }
        /**
         * Remove every option a module has declared secret.
         *
         * NOT A NAME PATTERN, and that distinction is the whole point. The parent's
         * $exclude parameter is a single SQL LIKE, and its default '%credentials%'
         * matches nothing this plugin stores - `Email_SMTP_Password` would have gone
         * onto the System Status page and into every report pasted into a support
         * ticket. The authority on what is secret is the module that owns the key
         * {@see \TIV_WOOAT\Modules\AbstractModule::is_secret()}, which is what
         * {@see Backup::is_secret_key()} asks - so a secret added later is covered
         * without anybody remembering this method exists.
         *
         * The row is kept, with the value replaced. "It is set, and we are not showing
         * you" is useful in a support report; a missing row is ambiguous.
         *
         * @since 2.0.0
         *
         * @param array $options Option name (prefix stripped) => value.
         *
         * @return array
         */
        protected static function drop_secrets(array $options): array
        {
        }
        /**
         * What kind of server this is.
         *
         * @since 2.0.0
         * @return array
         */
        protected static function server_facts(): array
        {
        }
        /**
         * The state of the managed file, including whether it agrees with the settings.
         *
         * THE DRIFT ROW IS THE POINT OF THIS SECTION. A site restored from a backup, or
         * moved between hosts, carries our rules with no matching option rows - or the
         * reverse. The settings screens cannot show it, because each one knows only its
         * own half; here both halves are in the same table.
         *
         * Read-only: {@see Maintenance::preview()} builds what WOULD be written and
         * nothing is saved. Marker names are compared, not bodies - a body comparison
         * would report a difference for whitespace, and the preview covers only the
         * hardening blocks, so it cannot speak for the whole file.
         *
         * @since 2.0.0
         * @return array
         */
        protected static function htaccess_facts(): array
        {
        }
        /**
         * What PHP is actually running, for the directives this plugin can write.
         *
         * The stored settings are already in this table; these are the other half of
         * the comparison. See PHPSettings::append_live_state() for why a mismatch
         * proves the setting is not in force but not that our rule failed.
         *
         * @since 2.0.0
         * @return array
         */
        protected static function php_facts(): array
        {
        }
        /**
         * Marker names without the shared prefix.
         *
         * @since 2.0.0
         *
         * @param string[] $markers Full marker names.
         *
         * @return string[]
         */
        protected static function short_markers(array $markers): array
        {
        }
    }
}
namespace TIV_WOOAT {
    /**
     * Class App
     *
     * @since 1.0.0
     */
    class App extends \TIV_WOOAT\Dependencies\TIVWP\AbstractApp implements \TIV_WOOAT\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * WooCommerce's settings tab slug.
         *
         * @since 1.0.0
         * @var string
         */
        public const TAB_SLUG = 'tiv_wooat';
        /**
         * Log file prefix.
         *
         * @see          \TIV_WOOAT\Log::source()
         * @type string
         * @since        1.0.0
         * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
         */
        public const LOG_SOURCE = 'Admin-Tools';
        /**
         * Save get_plugin_data() here.
         *
         * @since 1.7.0
         *
         * @var string[]
         */
        protected array $plugin_data = array();
        /**
         * Method get_plugin_data.
         *
         * @since 1.7.0
         *
         * @param string $key Which data to return.
         *
         * @return string
         */
        public function get_plugin_info(string $key = ''): string
        {
        }
        /**
         * Alias of instance() for IDE to get the correct pointer to this class and not to abstract.
         *
         * @since 1.7.0
         * @return App
         */
        public static function me(): \TIV_WOOAT\App
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since        1.0.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * This runs only after we checked the prerequisites.
         *
         * @since    1.0.0
         * @internal filter.
         */
        public function setup_hooks_after_plugins_loaded()
        {
        }
        /**
         * Is WooCommerce loaded?
         *
         * WooCommerce is optional since 2.1.0. Asked from plugins_loaded onwards, by which
         * time WooCommerce has defined its version constant if it is active at all.
         *
         * @since 2.1.0
         * @return bool
         */
        public static function is_woocommerce_active(): bool
        {
        }
        /**
         * May the current user change these settings?
         *
         * With WooCommerce, whoever manages the shop - shop managers included, as on
         * every other WooCommerce settings tab. Without it, administrators only:
         * manage_woocommerce does not exist on a site that never had WooCommerce, and on
         * one that removed it, the capability can outlive the plugin on old roles.
         *
         * A yes/no rather than a capability name to pass on: current_user_can() with
         * a literal is what lets the coding-standards check verify the name.
         *
         * @since 2.1.0
         * @return bool
         */
        public static function current_user_can_manage(): bool
        {
        }
        /**
         * The support URL.
         *
         * @since 1.0.0
         *
         * @var string
         */
        protected $url_support = 'https://woocommerce.com/my-account/create-a-ticket/';
        /**
         * Getter for $this->url_support.
         *
         * @since 1.0.0
         * @return string
         * @todo  Move to abstract
         *
         */
        public function getUrlSupport()
        {
        }
        /**
         * Method msg.
         *
         * @since 1.7.0
         *
         * @param $msg_id
         *
         * @return mixed|string
         */
        public static function msg($msg_id)
        {
        }
        /**
         * The docs URL.
         *
         * @since 1.4.1
         * @return string
         */
        public static function url_docs()
        {
        }
    }
}
namespace TIV_WOOAT\Enum {
    /**
     * Class Regex
     *
     * @since 1.0.0
     */
    class Regex
    {
        /**
         * IP pattern.
         *
         * @since 1.0.0
         * @var string
         */
        const IP = '^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$';
        /**
         * Filename pattern.
         *
         * @since 1.0.0
         * @var string
         */
        const FILENAME = '^[-.\w]+$';
        /**
         * Bytes with KMG pattern.
         *
         * @link  https://www.php.net/manual/en/faq.using.php#faq.using.shorthandbytes
         *
         * @since 1.3.0
         * @var string
         */
        const KMG = '^(-1|\d+[KMGkmg]?)$';
    }
}
namespace TIV_WOOAT\HTAccess {
    /**
     * Class Apache
     *
     * Builds Apache directives. Every deny goes through {@see Apache::deny()} so the
     * dual-syntax wrapper can never be forgotten: a bare "Require all denied" is a 500
     * where only mod_access_compat is loaded, and a bare "Deny from all" is a 500 on
     * pure 2.4.
     *
     * @since 2.0.0
     */
    class Apache
    {
        /**
         * One indent level.
         *
         * @since 2.0.0
         * @var string
         */
        public const TAB = "\t";
        /**
         * Indent every line of a block.
         *
         * @since 2.0.0
         *
         * @param string $text  Text to indent.
         * @param int    $depth How many levels.
         *
         * @return string
         */
        public static function indent(string $text, int $depth = 1): string
        {
        }
        /**
         * The dual-syntax deny body.
         *
         * Apache 2.4 with mod_authz_core uses Require; anything else falls back to the
         * 2.2 Order/Deny pair. A non-matching <IfModule> section is skipped without its
         * contents being parsed, so neither branch can produce an "Invalid command".
         *
         * The 2.2 branch is always "Order allow,deny" - see the spec 5.1 C1: the live
         * fleet file mixes "Order deny,allow" and "Order allow,deny" between blocks.
         * Both deny here, but one spelling is enough.
         *
         * @since 2.0.0
         * @return string
         */
        public static function deny(): string
        {
        }
        /**
         * Wrap content in a container directive.
         *
         * @since 2.0.0
         *
         * @param string $tag        Container name, e.g. 'If', 'Files', 'FilesMatch'.
         * @param string $expression The container's argument, already quoted if needed.
         * @param string $content    Inner directives.
         *
         * @return string
         */
        public static function container(string $tag, string $expression, string $content): string
        {
        }
        /**
         * A <FilesMatch> block that denies.
         *
         * @since 2.0.0
         *
         * @param string $regex Regex matching the file basename.
         *
         * @return string
         */
        public static function files_match_deny(string $regex): string
        {
        }
        /**
         * A <Files> block that denies an exact basename.
         *
         * Preferred over <If> or <FilesMatch> whenever the target is a literal file
         * name: it works on Apache 2.2, needs no regex engine, and cannot match a
         * substring of some other path.
         *
         * @since 2.0.0
         *
         * @param string $filename Exact file name.
         *
         * @return string
         */
        public static function files_deny(string $filename): string
        {
        }
        /**
         * An <If> block that denies.
         *
         * <If> is Apache 2.4 core - not a module - so there is no <IfModule> that can
         * guard it. On genuine 2.2 this is an "Invalid command" and a 500. See the spec
         * section 7.5: 2.2 has been EOL since 2017 and is treated as unsupported for
         * the three blocks that need query-string or directory-path matching.
         *
         * @since 2.0.0
         *
         * @param string $expression ap_expr expression, unquoted.
         *
         * @return string
         */
        public static function if_deny(string $expression): string
        {
        }
        /**
         * Wrap in <IfModule mod_rewrite.c> with the engine turned on.
         *
         * Every mod_rewrite block carries its own RewriteEngine and RewriteBase. It
         * must never rely on an earlier block having enabled rewriting - four live
         * fleet sites work only by that accident today (spec section 9 C3).
         *
         * @since 2.0.0
         *
         * @param string $content       Rewrite rules.
         * @param string $rewrite_base  Value for RewriteBase.
         *
         * @return string
         */
        public static function rewrite_block(string $content, string $rewrite_base): string
        {
        }
        /**
         * Escape a literal string for use inside an m#...# regex in an ap_expr.
         *
         * Deliberately not preg_quote(): that also escapes '-', '=', ':', '!', '<' and
         * '>', which are not metacharacters outside a character class. The result is
         * valid either way, but this file is meant to be readable by whoever has to
         * debug it at three in the morning, and "wp\-login\.php" is not.
         *
         * '#' IS escaped here, and ESCAPING IT CANNOT MAKE IT WORK. This docblock said
         * only the first half until 2026-10-07, when it was measured on 2.4.63:
         *
         *   m#/(od\#d\.php)$#i    REFUSED  Failed to compile regular expression
         *   m#/(od[#]d\.php)$#i   REFUSED  Failed to compile regular expression
         *   m/od#d\.php$/i        parses
         *   m/\/(od#d\.php)$/i    REFUSED  Failed to compile regular expression
         *
         * ap_expr locates the closing delimiter LEXICALLY, before any regex is compiled.
         * A backslash does not protect it, a character class does not hide it, and the
         * same is true of '/' under m/.../ - so the delimiter character simply cannot
         * appear in the pattern, by any spelling. A value containing one has to be
         * DROPPED, which {@see Apache::alternation()} does for the 'expr' flavour and
         * each caller's own validator does first.
         *
         * The escape is kept all the same, as a loud backstop rather than a fix. A '#'
         * that slips past the validators then yields a config Apache REFUSES, which
         * trips verify-and-rollback; left bare it would end the pattern early and could
         * truncate the rule into a regex that compiles and means something else. A
         * refused file is a recoverable accident, a silently narrowed security rule is
         * not.
         *
         * @since 2.0.0
         *
         * @param string $literal Literal text.
         *
         * @return string
         */
        public static function quote_expr(string $literal): string
        {
        }
        /**
         * Escape a literal string for a <FilesMatch> / RewriteRule regex.
         *
         * No delimiter is involved in those, so '#' needs no escaping either. A double
         * quote would break the containing directive; the callers' sanitizers reject
         * those rather than escaping them here.
         *
         * @since 2.0.0
         *
         * @param string $literal Literal text.
         *
         * @return string
         */
        public static function quote_regex(string $literal): string
        {
        }
        /**
         * True when a string is safe to drop into a regex with no escaping at all.
         *
         * Used for values the plugin generates and validates itself - the secret slug
         * and the cookie name - so the emitted rule stays legible.
         *
         * @since 2.0.0
         *
         * @param string $literal Literal text.
         *
         * @return bool
         */
        public static function is_regex_safe(string $literal): bool
        {
        }
        /**
         * True when a literal is safe to place inside a double-quoted argument.
         *
         * A double quote CLOSES the argument early. The remainder of the line then
         * parses as further arguments, Apache reports a syntax error, and every page on
         * the site is a 500 - with wp-admin among them, so the admin who typed it cannot
         * get back in to undo it. Newlines and control characters break the line the
         * same way.
         *
         * Escaping is deliberately not attempted. Nothing this plugin emits - a file
         * name, a path, a user-agent token - has any legitimate reason to contain one,
         * so a value that does is a mistake or an attack, and dropping it is both safer
         * and easier to reason about than producing something subtly different from what
         * was typed.
         *
         * @since 2.0.0
         *
         * @param string $literal Literal text.
         *
         * @return bool
         */
        public static function is_emittable(string $literal): bool
        {
        }
        /**
         * Build a non-capturing alternation from literals, each regex-escaped.
         *
         * Silently drops anything {@see Apache::is_emittable()} rejects. This is the
         * backstop, not the primary defence: callers validate their own input against a
         * character whitelist, because they know what shape their values should be and
         * can say so in the settings screen. The check is repeated here so that a future
         * caller which forgets cannot take a site down - which is exactly what happened
         * to the deny-file allowlist.
         *
         * @since 2.0.0
         *
         * @param string[] $literals Literal strings.
         * @param string   $flavour  'expr' for m#...#, 'regex' otherwise.
         *
         * @return string Empty string if there is nothing to build.
         */
        public static function alternation(array $literals, string $flavour = 'regex'): string
        {
        }
        /**
         * A comment block, every line prefixed with '# '.
         *
         * @since 2.0.0
         *
         * @param string|string[] $lines Comment text.
         *
         * @return string
         */
        public static function comment($lines): string
        {
        }
    }
    /**
     * Class CLI
     *
     * Manage the generated .htaccess blocks.
     *
     * This is the documented way back in when the settings page cannot be reached. A
     * misconfigured secret-login gate answers 404 for /wp-admin/, and no wp-config
     * constant can help - .htaccess is read by Apache before WordPress boots. So the
     * recovery path has to live outside the browser.
     *
     * @since 2.0.0
     */
    class CLI
    {
        /**
         * One row of the status table.
         *
         * @since 2.0.0
         *
         * @param string $item  Label.
         * @param string $value Value.
         *
         * @return array<string, string>
         */
        protected static function row(string $item, string $value): array
        {
        }
        /**
         * Show what is managed and whether it can be written.
         *
         * ## EXAMPLES
         *
         *     wp tiv-wooat htaccess status
         *
         * @since 2.0.0
         * @return void
         */
        public function status(): void
        {
        }
        /**
         * Print the blocks that would be written, without writing them.
         *
         * ## OPTIONS
         *
         * [--full]
         * : Print the whole resulting file instead of just the generated blocks.
         *
         * ## EXAMPLES
         *
         *     wp tiv-wooat htaccess preview
         *     wp tiv-wooat htaccess preview --full
         *
         * @since 2.0.0
         *
         * @param string[] $args       Positional arguments.
         * @param string[] $assoc_args Associative arguments.
         *
         * @return void
         */
        public function preview($args = array(), $assoc_args = array()): void
        {
        }
        /**
         * Regenerate every block from the stored settings.
         *
         * ## EXAMPLES
         *
         *     wp tiv-wooat htaccess rebuild
         *
         * @since 2.0.0
         * @return void
         */
        public function rebuild(): void
        {
        }
        /**
         * Remove every block this plugin owns.
         *
         * The way back from a lockout: run this over SSH, or delete the
         * "# BEGIN tiv_wooat_HTAccess_..." blocks from .htaccess by hand over FTP.
         *
         * ## EXAMPLES
         *
         *     wp tiv-wooat htaccess remove
         *
         * @since 2.0.0
         * @return void
         */
        public function remove(): void
        {
        }
        /**
         * Show the secret login address, or generate a new one.
         *
         * ## OPTIONS
         *
         * [--generate]
         * : Store a freshly generated secret address. Everyone signed in through the old
         * one will have to use the new address.
         *
         * ## EXAMPLES
         *
         *     wp tiv-wooat htaccess secret
         *     wp tiv-wooat htaccess secret --generate
         *
         * @since 2.0.0
         *
         * @param string[] $args       Positional arguments.
         * @param string[] $assoc_args Associative arguments.
         *
         * @return void
         */
        public function secret($args = array(), $assoc_args = array()): void
        {
        }
        /**
         * Register the commands.
         *
         * @since 2.0.0
         * @return void
         */
        public static function register(): void
        {
        }
    }
    /**
     * Class Collisions
     *
     * Reports where a directive the site already had may interact with one of ours.
     *
     * Policy: anything outside our markers is left completely alone. If someone wrote
     * it, assume they meant it. What we owe them is a warning when their rule and ours
     * meet - never an edit, a reorder or a deletion.
     *
     * @since 2.0.0
     */
    class Collisions
    {
        /**
         * Severity: harmless duplication.
         *
         * @since 2.0.0
         * @var string
         */
        public const DUPLICATE = 'duplicate';
        /**
         * Severity: last one wins, ours may shadow theirs or the reverse.
         *
         * @since 2.0.0
         * @var string
         */
        public const OVERRIDE = 'override';
        /**
         * Severity: behaviour actually conflicts.
         *
         * @since 2.0.0
         * @var string
         */
        public const CONFLICT = 'conflict';
        /**
         * Checks to run against foreign content.
         *
         * @since 2.0.0
         * @return array<int, array<string, string>>
         */
        protected static function checks(): array
        {
        }
        /**
         * Does ONE named check match, for a field that wants to ask about itself?
         *
         * {@see Collisions::find()} answers "what should the panel warn about", which is
         * a different question from "can this particular control still do its job". The
         * error-pages check is the case that needed both: as a panel notice it is
         * advice, and next to the switch it is the reason the switch is greyed out.
         *
         * Reads the file on every call. That is deliberate and cheap - the settings
         * screen is not a hot path, and a cached answer would go stale exactly when it
         * matters, which is while somebody is editing the file to resolve the clash.
         *
         * @since 2.0.0
         *
         * @param string $key      Check key, as listed in {@see Collisions::checks()}.
         * @param string $contents Optional file contents; read from disk when omitted.
         *
         * @return string The message, or '' when nothing foreign matches.
         */
        public static function message_for(string $key, string $contents = ''): string
        {
        }
        /**
         * Findings against the current file.
         *
         * @since 2.0.0
         * @since 2.0.0 Each finding carries its check key.
         *
         * @param string $contents Optional file contents; read from disk when omitted.
         *
         * @return array<int, array<string, string>>
         */
        public static function find(string $contents = ''): array
        {
        }
        /**
         * Sub-folders whose own .htaccess discards the rewrite rules we write.
         *
         * WHY THIS EXISTS. Per-directory mod_rewrite configuration is NOT inherited: a
         * single rewrite directive in a child .htaccess throws away the parent's rewrite
         * rules for that directory. Measured on Apache 2.4.63 - a file containing
         * nothing but "RewriteEngine On" was enough, and `RewriteOptions
         * InheritDownBefore` in the parent did not repair it. Every other mechanism this
         * plugin emits survives: FilesMatch, Files, <If> + authz, RedirectMatch and
         * Header all held, even against a child saying "Require all granted".
         *
         * That is why uploads_no_exec and the secret-login denial were moved off
         * mod_rewrite on 2026-10-07. What is left on it cannot move: only mod_rewrite
         * can set a cookie, and only mod_rewrite can test for a missing file. So the
         * remaining exposure is reported instead of fixed - which is this method.
         *
         * A FIXED LIST OF FOLDERS, NOT A WALK. This runs on every settings render, and
         * a recursive scan of a real uploads folder is thousands of stat calls for a
         * question about eight places. The list is the directories that sit above a path
         * our rewrite rules still care about AND that a third party plausibly writes to:
         * a security plugin password-protecting wp-admin, or a host. A deeper file can
         * still hide, so this detects the realistic cases rather than claiming
         * completeness - the panel says the folders are listed, not that the list is
         * exhaustive.
         *
         * The root file is not here. It is what every other check already reads, and our
         * own rules live in it.
         *
         * @since 2.0.0
         * @return string[] Folder paths relative to the site root, each ending in '/'.
         */
        public static function child_rewrite_overrides(): array
        {
        }
        /**
         * Does foreign content set a RewriteBase other than the one we write?
         *
         * Reported only on a real difference. Until 2026-10-04 any RewriteBase line
         * counted, so every site running W3 Total Cache - whose page-cache block always
         * carries "RewriteBase /" - got a CONFLICT warning about a value identical to
         * ours. A warning that is always on teaches the admin to stop reading warnings.
         *
         * @since 2.0.0
         *
         * @param string $foreign Content outside our markers and the WordPress block.
         *
         * @return bool
         */
        protected static function rewrite_base_differs(string $foreign): bool
        {
        }
        /**
         * True when the file has directives we did not write.
         *
         * @since 2.0.0
         *
         * @param string $contents File contents.
         *
         * @return bool
         */
        public static function has_foreign_rules(string $contents): bool
        {
        }
    }
    /**
     * Class Config
     *
     * A plain value object holding everything the blocks need: the admin's settings
     * plus the derived site paths. Blocks read only from here, never from the options
     * table, so the whole generator can be exercised without WordPress options - which
     * is what makes the preview and the offline harness possible.
     *
     * Every switch here starts OFF, so `new Config()` emits nothing at all. Seven of
     * them started on until 2026-08-24; they were flipped with the stored defaults in
     * {@see \TIV_WOOAT\Modules\HTAccess\ApacheHardening::defaults()} so that the two
     * cannot drift apart and produce a fresh install that writes .htaccess by itself.
     *
     * @since 2.0.0
     */
    class Config
    {
        /**
         * File extensions to deny, each with a leading dot.
         *
         * @since 2.0.0
         * @var string[]
         */
        public $deny_file_extensions = array();
        /**
         * File names that must never be denied.
         *
         * @since 2.0.0
         * @var string[]
         */
        public $deny_file_allowlist = array();
        /**
         * Deny copies of wp-config.php, whatever was appended to the name.
         *
         * @since 2.0.0
         * @var bool
         */
        public $deny_config_copies = false;
        /**
         * Deny names ending in a tilde, and the #emacs# autosave form.
         *
         * @since 2.0.0
         * @var bool
         */
        public $deny_editor_leftovers = false;
        /**
         * Deny dotfiles and dot-directories.
         *
         * @since 2.0.0
         * @var bool
         */
        public $deny_dot_paths = false;
        /**
         * Deny exploit-scan paths.
         *
         * @since 2.0.0
         * @var bool
         */
        public $block_scan_paths = false;
        /**
         * Tokens for the scan-path block.
         *
         * @since 2.0.0
         * @var string[]
         */
        public $scan_path_tokens = array();
        /**
         * Deny version-fingerprint files.
         *
         * @since 2.0.0
         * @var bool
         */
        public $deny_useless_files = false;
        /**
         * File names for the useless-files block.
         *
         * @since 2.0.0
         * @var string[]
         */
        public $useless_file_list = array();
        /**
         * Refuse wp-* folder addresses this layout does not use.
         *
         * @since 2.0.0
         * @var bool
         */
        public $no_phantom_wp_paths = false;
        /**
         * Refuse traversal, stream wrappers, metadata addresses and passwd in a query.
         *
         * @since 2.0.0
         * @var bool
         */
        public $block_query_exploits = false;
        /**
         * Refuse /dashboard, /admin, /login and friends.
         *
         * Also emitted when the gate is active, whatever this says - see
         * {@see Generator::block_admin_shortcuts}.
         *
         * @since 2.0.0
         * @var bool
         */
        public $block_admin_shortcuts = false;
        /**
         * The wp-* segments that address nothing here, from {@see SitePaths}.
         *
         * A derived path, not a setting, which is why it is filled by
         * {@see Config::fill_paths_from_site()} alongside home_path and core_subpath
         * rather than read from an option. Empty means the rule cannot be emitted.
         *
         * @since 2.0.0
         * @var string[]
         */
        public $phantom_wp_segments = array();
        /**
         * Refuse program addresses that do not exist on disk.
         *
         * @since 2.0.0
         * @var bool
         */
        public $no_phantom_scripts = false;
        /**
         * Virtual program addresses that must stay reachable.
         *
         * @since 2.0.0
         * @var string[]
         */
        public $phantom_script_allowlist = array();
        /**
         * Refuse program files under wp-content that are asked for by address.
         *
         * Verified 2026-10-07 - see {@see Generator::block_deny_content_php()}, which
         * carries all three measurements. This said "DRAFT - not verified against a
         * live site" until then.
         *
         * @since 2.0.0
         * @var bool
         */
        public $deny_content_php = false;
        /**
         * Paths under wp-content that must stay reachable, e.g. "plugins/foo/ipn.php".
         *
         * @since 2.0.0
         * @var string[]
         */
        public $content_php_allowlist = array();
        /**
         * Deny the file names known PHP backdoors are shipped under.
         *
         * @since 2.0.0
         * @var bool
         */
        public $deny_known_shells = false;
        /**
         * Deny the whole ?rest_route= query form.
         *
         * @since 2.0.0
         * @var bool
         */
        public $block_rest_query_form = false;
        /**
         * Deny the /wp-json/batch/ path form.
         *
         * @since 2.0.0
         * @var bool
         */
        public $block_rest_batch_path = false;
        /**
         * Deny xmlrpc.php.
         *
         * @since 2.0.0
         * @var bool
         */
        public $block_xmlrpc = false;
        /**
         * Deny author and user enumeration.
         *
         * @since 2.0.0
         * @var bool
         */
        public $block_author_enum = false;
        /**
         * Emit Options -Includes -Indexes.
         *
         * @since 2.0.0
         * @var bool
         */
        public $options_hardening = false;
        /**
         * Emit the cheap ErrorDocument replies.
         *
         * @since 2.0.0
         * @var bool
         */
        public $error_documents = false;
        /**
         * X-Content-Type-Options: nosniff.
         *
         * @since 2.0.0
         * @var bool
         */
        public $header_nosniff = false;
        /**
         * X-Frame-Options value, or empty to skip.
         *
         * @since 2.0.0
         * @var string
         */
        public $header_frame_options = '';
        /**
         * Referrer-Policy value, or empty to skip.
         *
         * @since 2.0.0
         * @var string
         */
        public $header_referrer_policy = '';
        /**
         * Remove the X-Pingback response header.
         *
         * @since 2.0.0
         * @var bool
         */
        public $strip_x_pingback = false;
        /**
         * Block the named bad-bot list.
         *
         * @since 2.0.0
         * @var bool
         */
        public $block_bad_bots_named = false;
        /**
         * Block the generic-substring bad-bot list.
         *
         * @since 2.0.0
         * @var bool
         */
        public $block_bad_bots_generic = false;
        /**
         * Extra user-agent tokens.
         *
         * @since 2.0.0
         * @var string[]
         */
        public $bad_bot_list = array();
        /**
         * Exempt loopback from the gate and the bad-bot block.
         *
         * @since 2.0.0
         * @var bool
         */
        public $trust_loopback = false;
        /**
         * Block PHP execution under /uploads/.
         *
         * @since 2.0.0
         * @var bool
         */
        public $uploads_no_exec = false;
        /**
         * File names allowed to execute under /uploads/.
         *
         * @since 2.0.0
         * @var string[]
         */
        public $uploads_exec_allowlist = array();
        /**
         * Redirect to the home page after logout.
         *
         * @since 2.0.0
         * @var bool
         */
        public $logout_to_home = false;
        /**
         * Hide the login and admin behind a secret cookie.
         *
         * @since 2.0.0
         * @var bool
         */
        public $secret_login = false;
        /**
         * The secret slug.
         *
         * @since 2.0.0
         * @var string
         */
        public $secret_login_slug = '';
        /**
         * The gate cookie name. Per-site, never the bare literal.
         *
         * @since 2.0.0
         * @var string
         */
        public $cookie_name = '';
        /**
         * Also hide admin-ajax.php behind the gate.
         *
         * @since 2.0.0
         * @var bool
         */
        public $gate_admin_ajax = false;
        /**
         * RewriteBase value.
         *
         * @since 2.0.0
         * @var string
         */
        public $rewrite_base = '/';
        /**
         * Home path, leading and trailing slashed.
         *
         * @since 2.0.0
         * @var string
         */
        public $home_path = '/';
        /**
         * WordPress core subdirectory relative to home, e.g. "wp/" or "".
         *
         * @since 2.0.0
         * @var string
         */
        public $core_subpath = '';
        /**
         * Where wp-content sits relative to home, e.g. "wp-content/" or "app/".
         *
         * Empty when wp-content is outside the site folder entirely, which means there
         * is no address for it and the rules that need one must not emit.
         *
         * @since 2.0.0
         * @var string
         */
        public $content_subpath = '';
        /**
         * Author archive base.
         *
         * @since 2.0.0
         * @var string
         */
        public $author_base = 'author';
        /**
         * True when the site is HTTPS, which enables the secure cookie flag.
         *
         * @since 2.0.0
         * @var bool
         */
        public $is_https = false;
        /**
         * The port the Host header will carry, or '' for none.
         *
         * Non-empty DISABLES the secret-login gate, because the colon in HTTP_HOST
         * breaks the cookie the gate depends on. {@see SitePaths::host_port()} for the
         * measurement and {@see Config::gate_is_active()} for the refusal.
         *
         * @since 2.0.0
         * @var string
         */
        public $host_port = '';
        /**
         * Fill the derived paths from the live site.
         *
         * @since 2.0.0
         * @return void
         */
        public function fill_paths_from_site(): void
        {
        }
        /**
         * True when the secret-login gate is usable.
         *
         * A half-configured setting is treated as "no gate", so it can never emit a
         * cookie test that matches any cookie at all.
         *
         * Deliberately does NOT consult {@see Slug::feature_enabled()}. That constant
         * decides whether the feature is OFFERED - it hides the controls, so a site
         * without it can never switch the gate on in the first place. It does not decide
         * whether an already-running gate keeps running. Withdrawing the constant from a
         * site that had the gate enabled would otherwise take a live security measure
         * away silently, on the next save, without anyone asking for that; and it was the
         * cause of the stranding this guard used to create - rules still in the file,
         * wp-admin still 404, and the feature declared "not active". The only way to turn
         * the gate off is to untick it, which also makes the controls disappear.
         *
         * Tests {@see Slug::is_valid()}, which is a test of SHAPE. It carries no minimum
         * length ({@see Slug::WARN_BELOW} is advice), so a short slug does produce a
         * running gate - a weaker one, and the field says so.
         *
         * It is shape that has to be checked here, not length. Until 2026-08-25 this
         * checked the length alone, which let "tivwooat1!! space" through - seventeen
         * characters, so long enough by that measure, and it reached the emitted rule as
         *
         *     [L,R,QSA,CO=name:tivwooat1!! space:%{HTTP_HOST}:0:/:secure:HttpOnly]
         *
         * where the space ends the flag list and Apache answers 500 for every request on
         * the site. The character set is not cosmetic: a RewriteRule flag list is comma
         * separated, the CO= value inside it is colon separated, and the whole thing ends
         * at the first space or ']'. A slug containing any of those cannot be escaped
         * into that position - there is no escape syntax there - so the only safe answer
         * is to refuse the value.
         *
         * @since 2.0.0
         * @return bool
         */
        public function gate_is_active(): bool
        {
        }
    }
    /**
     * Class Generator
     *
     * Turns a {@see Config} into marker => body pairs.
     *
     * Two structural rules govern everything here:
     *
     * 1. Pure denials are authz - <If>, <Files>, <FilesMatch> + Require. Authz runs
     *    BEFORE mod_rewrite, so no rewrite exemption can shadow a denial. That makes
     *    the whole "/index.php?rest_route=..." bypass class impossible by
     *    construction rather than by careful ordering.
     *
     *    The other half of that claim is that %{REQUEST_URI} in an <If> is the
     *    NORMALISED, percent-DECODED path, not the raw request line - otherwise every
     *    authz rule here could be stepped around by spelling the path differently.
     *    Measured against live Apache 2026-08-26, with a rule denying /login:
     *
     *        /LOGIN  /login/  //login  /./login  /wp/../login   -> all 403
     *        /%6Cogin  /%6c%6f%67%69%6e  /login?x=1             -> all 403
     *
     *    So case, encoding, doubled slashes, dot segments and the query string are all
     *    settled before the decision is made. Two that stay 404 rather than 403 -
     *    "/login;x" and "/wp/..;/login" - are not evasions: Apache does not collapse
     *    ";" the way Tomcat does, so those are simply different paths that reach
     *    nothing. That is what the "/login/..;/actuator/env" probes in the wild are
     *    hunting for, and they are aimed at a stack this is not.
     *
     *    One residual: "/login." answers 301 to "/login" from WordPress's own canonical
     *    redirect before our rule ever sees it, so a trailing dot still costs one page
     *    render. It cannot reach the login - the redirect target is denied - and it is
     *    no cheaper for an attacker than any other 404, so it is left alone.
     * 2. Interdependent mod_rewrite rules all live in ONE marker, in a fixed internal
     *    order. WordPress's marker insertion cannot guarantee order ACROSS markers, so
     *    anything order-sensitive must share one.
     *
     * @since 2.0.0
     */
    class Generator
    {
        /**
         * Every block, in emission order, mapped to the method that builds it.
         *
         * THE single source of truth for both the order blocks are written in and the
         * set of markers this plugin owns. Do not introduce a second list of either -
         * see {@see Generator::block_order()} for why.
         *
         * The order is fixed and does not vary with the settings: a block that is off
         * yields null and is skipped, but never moves the ones around it. Two reasons
         * that matters:
         *
         * 1. Blocks 'NoPhantomScripts' and 'ApacheHardening' are mod_rewrite, which is
         *    first-match-wins within the fixup phase, so their relative order is
         *    behaviour. The rest are authz or merged config and do not care.
         * 2. .htaccess is usually in version control. A file whose block order shifted
         *    because an unrelated option was toggled produces a diff that looks like a
         *    rewrite of the whole file, and a reviewer stops reading it.
         *
         * @since 2.0.0
         * @var array<string, string>
         */
        protected const BLOCK_BUILDERS = array(
            'DenyFileExtensions' => 'block_deny_file_extensions',
            /*
             * Inserted here rather than appended (2026-09-07), which shifts every block
             * below it once. Point 2 of this docblock says that costs a reviewer a bad
             * diff, and it does - but only on the one save after upgrading, and this
             * block belongs beside the extension rule whose gap it fills. Appending it
             * to the end would avoid the diff and hide the relationship forever.
             */
            'DenyConfigCopies' => 'block_deny_config_copies',
            'DenyEditorLeftovers' => 'block_deny_editor_leftovers',
            'DenyDotPaths' => 'block_deny_dot_paths',
            'BlockScanPaths' => 'block_scan_paths',
            'DenyUselessFiles' => 'block_deny_useless_files',
            'NoPhantomWpPaths' => 'block_no_phantom_wp_paths',
            'BlockAdminShortcuts' => 'block_admin_shortcuts',
            'BlockQueryExploits' => 'block_query_exploits',
            'NoPhantomScripts' => 'block_no_phantom_scripts',
            'DenyContentPhp' => 'block_deny_content_php',
            /*
             * Was a RewriteRule [F] inside 'ApacheHardening' until 2026-10-07, when the
             * child-.htaccess question was measured and the rewrite form turned out to be
             * bypassable. It is authz now. Placed here rather than appended because the
             * rule it overlaps is the line above - see block_uploads_no_exec() for the
             * measurement. The cost is point 2 of this docblock, one bad diff on the
             * first save after upgrading.
             */
            'UploadsNoExec' => 'block_uploads_no_exec',
            'DenyKnownShells' => 'block_deny_known_shells',
            'BlockDangerousEndpoints' => 'block_dangerous_endpoints',
            'BlockXmlrpc' => 'block_xmlrpc',
            'BlockAuthorEnumeration' => 'block_author_enumeration',
            'Options' => 'block_options',
            'ErrorDocuments' => 'block_error_documents',
            'SecurityHeaders' => 'block_security_headers',
            'BlockBadBots' => 'block_bad_bots',
            'ApacheHardening' => 'block_apache_hardening',
            /*
             * APPENDED on 2026-10-07, not inserted, and for once both reasons agree.
             * Appending shifts nothing, so no reviewer gets the bad diff of point 2 - and
             * it also keeps the reading order the gate had when it was one block: the
             * cookie-setting rules in 'ApacheHardening' above, then the denial.
             */
            'SecretLoginGate' => 'block_secret_login_gate',
        );
        /**
         * Marker names, in emission order.
         *
         * Derived from {@see Generator::BLOCK_BUILDERS} rather than declared separately.
         * It was a second hand-kept list until 2026-08-24, and the drift it allowed was
         * not benign: the orphan sweep treats anything outside this list as a leftover
         * from an older release, so a block added to the builders but forgotten here
         * would be written on one save and silently deleted on the next.
         *
         * @since 2.0.0
         * @return string[]
         */
        public static function block_order(): array
        {
        }
        /**
         * The file endings offered in the multiselect.
         *
         * NOT a default. Nothing here is pre-selected, and the curated subset is
         * {@see Generator::EXTENSIONS_DEFAULT}. The two are easy to confuse - this
         * docblock opened with the word "Default" until 2026-09-07, which made it read
         * as the other constant.
         *
         * DOT-PREFIXED NAMES ARE DELIBERATELY ABSENT. .aws, .git and .svn were offered
         * here until 2026-09-07 and did nothing {@see Generator::block_deny_dot_paths()}
         * does not already do. FilesMatch sees only the final path segment, so
         * /.git/config was never going to match; and /.git, the bare file they were kept
         * for, matches "/\." in DenyDotPaths just as surely as it matched "\.git$" here.
         * The one non-hidden variant that exists in the wild, a bare repository at
         * /project.git/config, is a DIRECTORY neither rule can reach. Three options that
         * bought nothing were costing a paragraph here and a warning in the field.
         *
         * .env is not the same case and stays: it also catches local.env and
         * settings.env, ordinary names DenyDotPaths never sees.
         *
         * .old and .save are here for what an editor leaves behind - nano writes
         * wp-config.php.save, and a hand-made spare is usually .old. The tilde form,
         * wp-config.php~, cannot be expressed as an extension at all and is covered by
         * {@see Generator::block_deny_config_copies()} instead.
         *
         * .po, .mo and .pot are safe to deny outright: WordPress reads them from disk in
         * PHP and nothing fetches them over HTTP. What they leak is inventory - every
         * plugin and theme installed, with versions - plus, in a .po header, the
         * translator's name and email address.
         *
         * .txt and .zip are the only two with a false-positive story, since a site may
         * serve either on purpose, and both are held out of EXTENSIONS_DEFAULT for that
         * reason. The field's warning names only .zip, as the usual case, and says the
         * rest in general terms - which covers .txt without a second clause, because the
         * .txt files that actually matter (robots.txt and friends) are in
         * ALLOWLIST_ALWAYS already and cannot be denied through any field.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const EXTENSIONS_OFFERED = array('.bak', '.env', '.ini', '.log', '.mo', '.old', '.po', '.pot', '.save', '.sh', '.sql', '.txt', '.zip');
        /**
         * The endings worth denying on a typical site.
         *
         * Every entry in {@see Generator::EXTENSIONS_OFFERED} except .txt and .zip, which
         * are the two a site may legitimately serve. Written out rather than derived with
         * array_diff() so that "worth denying" stays a judgement someone made, instead of
         * becoming a leftover of whatever the offered list happens to hold next.
         *
         * NOT a default any more (2026-08-24): nothing in this module is on out of the
         * box, so this was offered in the field description as a list to copy rather than
         * being pre-selected. Same for {@see Generator::SCAN_TOKENS_DEFAULT} and
         * {@see Generator::USELESS_FILES_DEFAULT}. The _DEFAULT names are kept because
         * they are what the docs already call them.
         *
         * NOT PRINTED ANY MORE either (2026-09-06), and this constant now has no caller.
         * The field is a multiselect showing all of {@see Generator::EXTENSIONS_OFFERED},
         * so naming a subset asked "why those and not the others?" without answering it -
         * and the answer is already in the field's own warnings. Only SCAN_TOKENS_DEFAULT
         * is still shown, on a textarea where the reader has no other way to reach those
         * names.
         *
         * Kept, not deleted: a "use this list" control on the field would fill it from
         * here, which is the version of that idea worth building - see
         * `docs/_Roadmap/panel-redesign.md` section 9. Nothing will warn you it is
         * unused; PhpStorm does not report an unused public constant.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const EXTENSIONS_DEFAULT = array('.bak', '.env', '.ini', '.log', '.mo', '.old', '.po', '.pot', '.save', '.sh', '.sql');
        /**
         * Root files that must never be denied, whatever the extension selection.
         *
         * Always unioned with the admin's list - removing robots.txt from this must not
         * be possible.
         *
         * Deliberately kept COMPLETE rather than trimmed to what can currently fire.
         * Only .txt is in {@see Generator::EXTENSIONS_OFFERED} today, so the .xml and
         * .ico entries cannot be caught by anything and are filtered out of the emitted
         * regex - see {@see Generator::block_deny_file_extensions()}. Keeping them costs
         * nothing and means the protection arms itself if .xml or .ico is ever offered,
         * instead of failing silently because nobody remembered this list.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const ALLOWLIST_ALWAYS = array('robots.txt', 'ads.txt', 'llms.txt', 'llms-full.txt', 'sitemap.xml', 'sitemap_index.xml', 'favicon.ico');
        /**
         * Core files that address nothing at the DOCROOT when core lives in a subfolder.
         *
         * Only meaningful when `core_subpath` is non-empty. With core at the top these
         * are the real files and denying them would be catastrophic.
         *
         * NOTE WHAT IS ABSENT. `wp-login.php` is NOT here, for the same reason the bare
         * `/wp-admin/` is left alone in {@see Generator::block_no_phantom_wp_paths()}:
         * core redirects it. `wp_redirect_admin_locations()` builds its login list from
         * `home_url( 'wp-login.php', 'relative' )` among others, so on a subdirectory
         * install `/wp-login.php` at the docroot answers 302 to the real login rather
         * than 404. Measured, not assumed - probed on wooat.org 2026-08-26, where every
         * name below answered 404 at ~134,800 bytes and `/wp-login.php` answered 302.
         *
         * `wp-config.php` is absent too, and for a different reason: the Composer layout
         * keeps it AT the docroot while core sits in /wp, so it is a real file there.
         * The same probe had it answering 200.
         *
         * Why this list exists at all when {@see Generator::block_no_phantom_scripts()}
         * already refuses every missing .php: that rule is tagged "use with care"
         * because of virtual endpoints, and this one is "recommended" and carries no
         * such risk. The configuration we actually recommend - paths on, scripts off -
         * would otherwise pay a full themed 404 for each of these. Seen in a live log:
         * /wp-cron.php probed from three separate addresses in one morning.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const PHANTOM_WP_FILES = array('wp-cron.php', 'wp-signup.php', 'wp-activate.php', 'wp-comments-post.php', 'wp-links-opml.php', 'wp-mail.php', 'wp-trackback.php', 'wp-load.php', 'wp-blog-header.php', 'wp-settings.php', 'xmlrpc.php');
        /**
         * The shorthand admin addresses core redirects, minus the two real ones.
         *
         * WordPress answers a handful of convenience addresses: /dashboard, /admin and
         * /login all bounce to the real admin or login. The full list is in core's
         * wp_redirect_admin_locations(), against both home_url() and site_url().
         *
         * wp-admin and wp-login.php are deliberately ABSENT here. Those are the genuine
         * addresses - denying wp-login.php locks everyone out, and /wp-admin is handled by
         * {@see Generator::block_no_phantom_wp_paths()} on the layouts where it is bogus.
         * What is left is pure shorthand that nothing on a site ever links to.
         *
         * These are not cheap redirects. Core only reaches that function
         * `if ( is_404() && using_permalinks() )`, so the whole 404 has already been
         * built - query, template lookup and all - before the redirect is issued.
         * Observed on a live site: "GET /dashboard" answering 302 with 5,106 bytes, over
         * and over from one address.
         *
         * login.php overlaps {@see Generator::block_no_phantom_scripts()}, which already
         * refuses it for having no file behind it - confirmed in a live log, where
         * "GET /login.php" answered 403 from that rule alone. Kept here anyway: the two
         * settings are independent, and this one has to hold on a site where the script
         * rule is switched off.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const ADMIN_SHORTCUTS = array('dashboard', 'admin', 'login', 'login.php');
        /**
         * Exploit-scan path segments.
         *
         * Every token is exploit-specific. Editable, because a site could legitimately
         * proxy /phpmyadmin on the same vhost.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const SCAN_TOKENS_DEFAULT = array('elfinder', 'kcfinder', 'filemanager', 'adminer', 'phpmyadmin');
        /**
         * Files that ship with core and serve no visitor, offered as a starting list.
         *
         * Both still exist and are still served to anyone who asks. Neither carries a
         * version number any more - readme.html lost the "Version x.y" line under the
         * logo and now names only the PHP and MySQL requirements.
         *
         * Do NOT sell this as hiding that the site runs WordPress. It does not: core
         * announces itself in a dozen other places that no .htaccess rule can reach, so
         * a claim like that would be false comfort. The honest case for the block is
         * narrower and still worth making - these are files nothing links to, that no
         * visitor has a reason to open, and the same rule then covers whatever the site
         * owner has of their own.
         *
         * Note that install.php and upgrade.php are deliberately NOT here: denying
         * wp-admin/install.php breaks a fresh install and upgrade.php breaks the
         * database upgrade after a core update. Do not add them.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const USELESS_FILES_DEFAULT = array('readme.html', 'license.txt');
        /**
         * Names always added to the deny list, and never shown in the settings screen.
         *
         * The same shape as {@see Generator::ALLOWLIST_ALWAYS}: a name here is unioned
         * into the emitted rule whenever the block is emitted at all, so the admin does
         * not have to know about it or keep it in their box.
         *
         * wlwmanifest.xml is the case this exists for. WordPress 6.3 deleted the file
         * from core and deprecated the wp_head link that pointed at it, so there is
         * nothing left to fingerprint - but /wp-includes/wlwmanifest.xml stays one of the
         * most-probed paths in the wild, and because the file is now MISSING, core's
         * "not a real file" rewrite hands the request to index.php and WordPress renders
         * a complete themed 404 for it. Denying the name turns that into a refusal in the
         * authz phase. It is out of the settings screen because a name that no longer
         * exists is confusing to read in a list titled "deny these file names".
         *
         * @since 2.0.0
         * @var string[]
         */
        public const USELESS_FILES_ALWAYS = array('wlwmanifest.xml');
        /**
         * File names of published PHP web shells, denied wherever they appear.
         *
         * The same shape as {@see Generator::BAD_BOTS_NAMED}: a fixed list in code, not
         * an admin-editable box. That is deliberate and it is the guard - a name list
         * that could be edited could be pointed at index.php, and a <FilesMatch> naming
         * index.php answers 403 for every address on the site including wp-admin.
         *
         * BE HONEST ABOUT WHAT THIS IS. It is a speed bump, not a protection. These are
         * the names of backdoors that get left behind AFTER a break-in, so a hit means
         * the site is already compromised and the rule has, at best, stopped the
         * attacker using the door they made. Renaming the file defeats it completely,
         * and the attacker chose the name. It catches the automated and the careless,
         * which is most of them, and it costs nothing.
         *
         * WHY IT IS WORTH HAVING ANYWAY. It is the only rule here that reaches a planted
         * file at the DOCROOT. {@see Generator::block_deny_content_php()} covers the same
         * ground far more thoroughly, but stops at wp-content by design;
         * {@see Generator::block_no_phantom_scripts()} never touches a file that exists.
         * A backdoor at /backdoor.php is otherwise caught by nothing.
         *
         * EXACT BASENAMES, not prefixes. A prefix match would also catch the numbered
         * variants these families ship in - wso2.5.php, c99madshell.php - but "alfa" and
         * "mini" are ordinary words, and a false positive here is a plugin that breaks
         * with no way to fix it from the settings screen, because this list is not
         * editable. The variants are the price of that safety.
         *
         * NEEDS LOG CURATION. These are drawn from published web-shell families, not
         * from our own traffic. Before this ships, the list should be checked against
         * what the fleet's logs are actually asked for, and names nobody has ever probed
         * should come out rather than sit here looking authoritative.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const KNOWN_SHELL_NAMES = array('0byt3m1n1.php', 'alfa.php', 'alfa-rex.php', 'b374k.php', 'c99.php', 'c100.php', 'gel4y.php', 'indoxploit.php', 'leafmailer.php', 'marijuana.php', 'priv8.php', 'r57.php', 'sh3ll.php', 'webshell.php', 'wp-conflg.php', 'wso.php', 'xleet.php', 'xleet-shell.php');
        /**
         * PHP names that no rule in this class may ever deny.
         *
         * A backstop for {@see Generator::KNOWN_SHELL_NAMES}, which is a hand-kept list
         * and therefore something a future edit can get wrong. Denying any of these by
         * basename is a site-wide outage that cannot be undone from the admin screens:
         * index.php takes every address including wp-admin, wp-login.php locks everyone
         * out, admin-ajax.php breaks the front end of most plugins at once.
         *
         * Basenames, because <FilesMatch> only ever sees a basename - which is also why
         * denying "index.php" would hit wp-admin/index.php and every plugin's silence
         * file along with the one at the docroot.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const PHP_NEVER_DENY = array('index.php', 'wp-login.php', 'wp-config.php', 'wp-cron.php', 'wp-load.php', 'wp-blog-header.php', 'wp-settings.php', 'wp-comments-post.php', 'admin-ajax.php', 'admin-post.php', 'load-scripts.php', 'load-styles.php', 'wp-tinymce.php');
        /**
         * May this file name be denied by {@see Generator::block_deny_useless_files()}?
         *
         * Two refusals, for two different kinds of harm: no PHP of any variety
         * ({@see Generator::is_php_name()}), and none of the names that must stay
         * reachable ({@see Generator::is_protected_name()}).
         *
         * NO PHP, EVER. Not a list of dangerous names - the whole extension, because on
         * this particular block a .php entry is either useless or destructive and there
         * is no third case.
         *
         * The reason is what <FilesMatch> + Require actually does. It can only affect a
         * file that is REQUESTED BY ADDRESS. Nearly every .php file in a WordPress
         * install is never requested: it is require'd by another file, so an authz rule
         * naming it does precisely nothing, and an admin who denied it would believe they
         * had protected something. The .php files that ARE requested directly are almost
         * exactly the set that must keep working - index.php, which every address on the
         * site routes through; wp-login.php; everything under wp-admin/; admin-ajax.php;
         * admin-post.php; wp-cron.php; wp-comments-post.php. Denying any of those is a
         * silent outage at best and a locked door at worst: index.php answers 403 for the
         * entire site, wp-admin included, and the only way back is editing .htaccess by
         * hand.
         *
         * The cases where blocking PHP is legitimate all have a purpose-built setting
         * here, each with the exceptions and warnings that case needs: no_phantom_scripts
         * for program addresses with no file, uploads_no_exec for PHP under /uploads/,
         * block_xmlrpc for xmlrpc.php, gate_admin_ajax for admin-ajax.php, and the
         * secret-login gate for wp-login.php and wp-admin. A blunt name match is the
         * wrong instrument for every one of them.
         *
         * Input validation, not environment detection, so it sits outside the "detection
         * only advises" rule - the same footing as {@see Slug::is_valid()}. A warning in
         * the field description was the wrong instrument too: the cost of ignoring it is
         * not a degraded feature but a site that cannot be repaired from the admin
         * screens, and the person who needs the warning is the person not reading it.
         *
         * Reuses {@see Generator::PHP_EXTENSIONS} so this and the uploads block cannot
         * disagree about what counts as PHP. Case-insensitive because the emitted rule
         * carries (?i) and would act on "Index.PHP" too, and anchored with D because
         * without it "$" also matches before a trailing newline.
         *
         * @since 2.0.0
         *
         * @param string $name Candidate file name.
         *
         * @return bool
         */
        public static function is_deniable_name(string $name): bool
        {
        }
        /**
         * Is this name a PHP file?
         *
         * Split out from {@see Generator::is_deniable_name()} only so the settings screen
         * can say WHICH rule rejected an entry. Deliberately free of translation calls,
         * like the rest of this class: the generator is exercised by the offline harness
         * with no WordPress loaded, so the wording lives in the module.
         *
         * @since 2.0.0
         *
         * @param string $name Candidate file name.
         *
         * @return bool
         */
        public static function is_php_name(string $name): bool
        {
        }
        /**
         * Is this one of the names that must stay reachable?
         *
         * The same {@see Generator::ALLOWLIST_ALWAYS} the extension block treats as
         * untouchable, applied to the deny-by-name block as well. It has to be: that
         * allowlist exists because "removing robots.txt from this must not be possible",
         * and a rule that cannot be reached through one field but can be reached through
         * the field directly below it is not a guarantee.
         *
         * The damage is the reason this is a guard and not a warning. Denying robots.txt
         * or sitemap.xml breaks nothing a visitor can see and produces no error anywhere;
         * it just quietly degrades how the site is crawled, and by the time anyone
         * notices, the cause is weeks behind them.
         *
         * @since 2.0.0
         *
         * @param string $name Candidate file name.
         *
         * @return bool
         */
        public static function is_protected_name(string $name): bool
        {
        }
        /**
         * Named crawlers. Low false-positive risk, so safe to offer as one switch.
         *
         * AI crawlers (ClaudeBot, GPTBot and friends) are deliberately absent.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const BAD_BOTS_NAMED = array('Barkrowler', 'Bytespider', 'coccocbot', 'DataForSeoBot', 'Dataprovider', 'DomainStatsBot', 'DotBot', 'GeedoProductSearch', 'HTTrack', 'MojeekBot', 'Pandalytics', 'PetalBot', 'SeznamBot', 'ZoominfoBot', 'nikto', 'wp2shell');
        /**
         * Generic substrings.
         *
         * These match real traffic as well as bots: "MSIE" appears in genuine older
         * browsers, and "python" / "curl" are used by legitimate payment and shipping
         * callbacks. Acceptable on a server whose traffic you know; not acceptable as a
         * default on a stranger's store. Off unless explicitly enabled.
         *
         * @since 2.0.0
         * @var string[]
         */
        public const BAD_BOTS_GENERIC = array('2ip', 'archiver', 'clshttp', 'curl', 'ds9', 'email', 'extract', 'grab', 'harvest', 'libwww-perl', 'loader', 'miner', 'MSIE', 'python', 'remotasks', 'scan', 'wget', 'winhttp');
        /**
         * PHP extensions that must never execute under /uploads/.
         *
         * PHP only, deliberately. The uploads rule is about execution, and PHP is the
         * only thing this stack executes - adding .asp there would guard against nothing.
         * {@see Generator::SCRIPT_EXTENSIONS} is the wider set, for the rule that is about
         * cost rather than execution.
         *
         * WHY php[0-9] AND pht, when our own servers execute neither. Debian wires PHP to
         * .phar, .php and .phtml and nothing else - `<FilesMatch ".+\.ph(?:ar|p|tml)$">`
         * in /etc/apache2/mods-available/php8.3.conf, read on tiv02 2026-08-26 - so a
         * .php5 or .pht there is inert. This list is not sized for our servers. Shared and
         * cPanel hosting still ships `AddHandler application/x-httpd-php .php .php5 .php7
         * .phtml` as a matter of course, and the plugin runs on hosts we know nothing
         * about. A rule about execution has to cover what the WORST host executes.
         *
         * The same file naming is also what defeats an anchored handler in the other
         * direction: `photo.php.jpg` ends in .jpg, so Debian's anchored FilesMatch never
         * matches it, but an AddHandler host reads EVERY extension via mod_mime and runs
         * it. That is what the trailing `(\.|$)` in the emitted rules is for.
         *
         * The narrower-handler case is NOT a second reason to include these, whatever it
         * looks like at first. Where a host has no handler for .php5, such a file falls
         * through to the static file server and its source is served instead of executed -
         * but the only .php5 on a WordPress site is one an attacker put there, so what
         * leaks is their code, not the site's. Worth knowing, not worth citing.
         *
         * @since 2.0.0
         * @var string
         */
        protected const PHP_EXTENSIONS = 'php|php[0-9]|phtml|phar|pht';
        /**
         * The paths the secret-login gate closes.
         *
         * ANCHORED TO PATH SEGMENTS. An unanchored "wp-(login|admin|json|signup)"
         * substring test also matches an ordinary post at /how-to-use-wp-admin/, which
         * would then 404 for every anonymous visitor.
         *
         * A constant because two blocks emit it from 2026-10-07 - the mod_alias form
         * and its mod_rewrite fallback, both in
         * {@see Generator::block_secret_login_gate()}. They must not drift: one of them
         * is the only thing standing between a stranger and the login page on whichever
         * server the site runs.
         *
         * @since 2.0.0
         * @var string
         */
        protected const GATE_PATHS = '(^|/)wp-(login\.php|signup\.php|admin(/|$)|json(/|$))';
        /**
         * Extensions that a scanner probes for and this site never serves from thin air.
         *
         * Everything PHP, plus the other platforms' script extensions. Used by
         * {@see Generator::block_no_phantom_scripts()} and by nothing else.
         *
         * The non-PHP half is NOT about execution. Apache here has no handler for .aspx
         * or .jsp, so such a file could not run even if an attacker put one on disk. It is
         * about what a MISSING one costs: core's own "not a real file" rewrite hands the
         * request to index.php and WordPress renders a full themed 404 for it, exactly as
         * it does for a missing .php. Scan lists spray all of these together, so leaving
         * them out means paying full price for the same scan.
         *
         * Safer to include than .php is, in fact. The one false positive this rule can
         * produce is an address registered through add_rewrite_rule() with no file behind
         * it, and those exist for .php in the long tail. A virtual .aspx endpoint on an
         * Apache WordPress site is not a thing.
         *
         * Not in the settings screen and not editable: an admin who genuinely serves .pl
         * from disk is unaffected, because the rule only ever fires when the file is
         * missing.
         *
         * @since 2.0.0
         * @var string
         */
        protected const SCRIPT_EXTENSIONS = self::PHP_EXTENSIONS . '|asp|aspx|jsp|jspx|cgi|pl|py';
        /**
         * The configuration.
         *
         * @since 2.0.0
         * @var Config
         */
        protected $config;
        /**
         * Constructor.
         *
         * @since 2.0.0
         *
         * @param Config $config Resolved settings.
         */
        public function __construct(\TIV_WOOAT\HTAccess\Config $config)
        {
        }
        /**
         * Build every block.
         *
         * Returns an entry for EVERY known marker, with null where the block is off, so
         * that turning an option off removes its marker rather than leaving it behind.
         *
         * @since        2.0.0
         * @return array<string, string|null>
         * @noinspection PhpLoopCanBeConvertedToArrayMapInspection
         */
        public function build_blocks(): array
        {
        }
        /**
         * Deny access to files by extension.
         *
         * The leading negative lookahead is what makes .txt safe to offer at all: it
         * exempts the legitimate root files before the extension test runs.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_deny_file_extensions(): ?string
        {
        }
        /**
         * Deny every variant of the settings file name except the real one.
         * wp-config.php holds the database credentials, so a copy of it left inside the
         * docroot is not a leak that leads to a break-in - it is the break-in. The copies
         * are made by people rather than by software: an editor writing wp-config.php~ or
         * wp-config.php.save beside the file it opened over FTP, or an admin taking
         * wp-config.php.bak before a change and never removing it.
         *
         * A PATTERN, not a name list, because the endings are unbounded: .bak, .old,
         * .save, .orig, .1, .disabled, .txt, a trailing tilde, a trailing underscore.
         * {@see Generator::block_deny_file_extensions()} cannot express the tilde form at
         * all - its regex is `\.(alternation)$` and a bare suffix has no dot - and
         * {@see Generator::block_deny_useless_files()} takes literal names only.
         *
         * THIS RULE HAS NO FALSE-POSITIVE STORY, which is what makes it the one thing in
         * the section that can be recommended without a warning beside it. The real
         * wp-config.php is never fetched over HTTP: PHP includes it from disk, and
         * <FilesMatch> governs requests, not include(). The exemption in the lookahead is
         * belt and braces - the rule could deny the real file and the site would still
         * run.
         *
         * NOT covered, on purpose: wp-config-sample.php, which core ships on every
         * install and which holds no credentials.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_deny_config_copies(): ?string
        {
        }
        /**
         * Deny the files a text editor leaves beside the one it opened.
         *
         * `functions.php~` is vim and emacs; `#notes.php#` is emacs mid-edit. Both are
         * written when somebody edits a file directly on the server, over FTP or in a
         * hosting file manager, and both are then forgotten. The server does not
         * recognise either name as program code, so it does not run them - it sends the
         * source out as plain text.
         *
         * A SUFFIX RULE, and it has to be. `~` is appended after the whole file name, so
         * there is no dot in front of it and
         * {@see Generator::block_deny_file_extensions()} cannot express it at any list
         * length: its regex is `\.(alternation)$`. Widening the endings field to accept
         * `.php~` would be worse than leaving this out, because `style.css~` would then
         * need its own entry and `notes~` could never be entered at all, while the admin
         * had every reason to believe the class was covered. Measured before building
         * this: of `messages.po~`, `functions.php~`, `style.css~`, `notes~` and
         * `#notes.php#`, an ending-based rule reaches two.
         *
         * DELIBERATELY NARROW. `.orig`, `.rej`, `.old` and `.save` are ordinary endings
         * and belong in the extension field; `.file.php.swp` starts with a dot and
         * belongs to {@see Generator::block_deny_dot_paths()}. This rule covers only what
         * nothing else can reach, which is what keeps its description one line long.
         *
         * No `(?i)`, unlike its neighbours: neither `~` nor `#` has a case, and `.+`
         * does not care.
         *
         * A tilde in the MIDDLE of a name is untouched - `my~file.php` and
         * `2026~archive.html` stay reachable. And `<FilesMatch>` sees a basename, so the
         * old-style `/~user/` home-directory path form is not affected either: there the
         * basename is whatever the file is called.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_deny_editor_leftovers(): ?string
        {
        }
        /**
         * Deny every dotfile and dot-directory.
         *
         * Covers what the extension list cannot: dot-DIRECTORY traversal
         * (/.git/config, /.svn/entries, /.aws/credentials - the basename is
         * config/entries, not .git) and dotfile variants (.env, .env.production).
         *
         * Also covers .user.ini, which is the leak Wordfence and Really Simple Security
         * both add a dedicated rule for.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_deny_dot_paths(): ?string
        {
        }
        /**
         * Deny exploit-scan paths.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_scan_paths(): ?string
        {
        }
        /**
         * Deny files by name, in any folder.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_deny_useless_files(): ?string
        {
        }
        /**
         * Refuse wp-* folder addresses this layout does not use.
         *
         * Generalised from a hand-written block on artbylena, where WP_CONTENT_URL is
         * /app and every /wp-content/ probe was therefore costing a full themed 404.
         *
         * The premise is the same as {@see Generator::block_no_phantom_scripts()} - an
         * address that resolves to nothing is a scan - but it reaches what that rule
         * cannot. Extension rules only see extensions; this one covers everything under
         * the folder, which is where the bulk of the traffic actually is:
         * /wp-content/plugins/<name>/readme.txt version probes, /wp-includes/ asset
         * fishing, /wp-content/uploads/ directory guessing. None of those end in a script
         * extension and none are dotfiles, so nothing else here touches them.
         *
         * Authz rather than mod_rewrite, per rule 1 in the class docblock, so it settles
         * before the rewrite phase and no foreign RewriteRule can shadow it.
         *
         * ONLY safe because the segments are computed, never guessed - see
         * {@see SitePaths::phantom_wp_segments()}. On a normal install /wp-admin/ IS the
         * admin: this rule would lock the owner out of their own site and the way back
         * would be editing .htaccess by hand. An empty segment list emits nothing, and
         * the settings screen does not offer the box at all.
         *
         * The match is anchored to the HOME path, not to "^/". A site served from /blog/
         * with core at /blog/wp/ has its phantom paths at /blog/wp-admin/, and an
         * unanchored rule would both miss those and reach paths outside the site.
         *
         * Case-insensitive: /WP-ADMIN/ resolves to nothing on a case-sensitive
         * filesystem, but it still reaches WordPress and still costs the full 404, which
         * is the thing being prevented.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_no_phantom_wp_paths(): ?string
        {
        }
        /**
         * Refuse query strings that are trying to read a file or reach a metadata service.
         *
         * Built from a single real scan against artbylena on 2026-08-26 - 1,119 requests
         * in ninety seconds, one address, seventeen rotated crawler identities. None of it
         * could work on a stock WordPress, because core ignores an unknown query parameter,
         * but every probe still cost a full page render: roughly 70 KB per themed 404 and
         * 22 KB per home page. That is the whole case for this rule. It is not protecting
         * WordPress from a flaw WordPress has; it is refusing to spend a page render on a
         * request that could never have been legitimate.
         *
         * It DOES matter the moment a plugin reads one of those parameters, which is what
         * the whole class exists to find.
         *
         * Four things, and deliberately not a fifth:
         *
         * 1. TRAVERSAL - "../" in any spelling.
         * 2. STREAM WRAPPERS - file://, php://, data:// and friends.
         * 3. CLOUD METADATA - the link-local address and Google's metadata host. On a
         *    cloud instance these hand out live IAM credentials to anything that can be
         *    made to fetch them, which is why an SSRF is worth so much more there.
         * 4. passwd, anywhere.
         * 5. A "cmd" parameter, which is command injection looking for something that
         *    will run it.
         *
         * And one deliberately absent: a bare "contains a dot-file name" test. It reads
         * as the obvious rule and it is the wrong one. A search box on a development blog
         * legitimately produces "?s=.env", and traversal is the better thing to key on -
         * "file=../../../../etc/passwd" carries no dot-file at all.
         *
         * BOTH SPELLINGS OF EVERYTHING, and this is the part that is easy to get wrong.
         * %{QUERY_STRING} is RAW - not decoded, not normalised - which is the exact
         * opposite of %{REQUEST_URI}. Measured on this build with a rule denying only the
         * literal "../":
         *
         *     /?file=../../.env      -> 403   the rule matched
         *     /?file=..%2F..%2F.env  -> 200   walked straight past
         *     /?file=..%2f..%2f.env  -> 301   walked straight past
         *
         * and %2F is precisely the spelling the live scanner used. A rule written the
         * obvious way would have looked like it worked while catching nothing.
         *
         * WHAT IT DOES NOT CATCH. Probed against this rule on a live site 2026-09-10;
         * every one of these passed through:
         *
         *     /?x=%252e%252e%252fetc        double-encoded traversal
         *     /?x=..\windows                raw unencoded backslash
         *     /?url=http://100.100.100.200  metadata addresses other than the two named
         *     /?x=ftp://host/f              stream wrappers outside the listed set
         *     /?x=compress.zlib://f         likewise
         *
         * None is alarming alone - a double-encoded traversal still has to reach
         * something that decodes twice - but the emitted comment used to claim
         * "traversal in any spelling", and these are spellings it does not have. Widening
         * to cover them costs false-positive risk; the decision was to narrow the claim
         * instead.
         *
         * DELIBERATELY ABSENT, as opposed to merely missing: http:// and https://.
         * Query strings carry real URLs constantly - redirect_to and friends - and
         * denying the scheme would break them. Anyone tempted to "complete" the wrapper
         * list should read that sentence twice.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_query_exploits(): ?string
        {
        }
        /**
         * Refuse the shorthand admin addresses.
         *
         * Two reasons, and the second one is why this also switches itself on with the
         * gate:
         *
         * 1. COST. Every /dashboard probe is a complete WordPress 404 before core gets as
         *    far as redirecting - see {@see Generator::ADMIN_SHORTCUTS}. Refusing here is
         *    a static 403 with no PHP at all.
         * 2. The gate's ONE JOB is that wp-login.php should look like it was never there.
         *    /login answering "302, this way to wp-login.php" gives that away completely.
         *    An attacker who asks for wp-login.php on a gated site gets 404 and would
         *    reasonably conclude there is no WordPress here; /login redirecting tells them
         *    otherwise, and tells them exactly where to point the next thing they try.
         *    Note the gate is not BYPASSED by the shortcut - the redirect target is gated
         *    too - so this is about the tell, not about access.
         *
         * Emitted whenever the gate is active, whatever the setting says, on the same
         * grounds as {@see Generator::rule_logout_to_home()}: a hidden login that
         * announces itself is not hidden, and nobody switching the gate on is asking for
         * that.
         *
         * Covers the core-subdirectory forms too, because core builds its list from BOTH
         * home_url() and site_url() - on a skeleton layout /wp/dashboard redirects just as
         * /dashboard does.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_admin_shortcuts(): ?string
        {
        }
        /**
         * Refuse program addresses that are not real files.
         *
         * The premise: on a normal WordPress site every endpoint that legitimately answers
         * is a file on disk. A request for one that is not - /shell.php,
         * /wp-content/uploads/x.php, /old/backdoor.php - is a scan, and there are tens of
         * thousands of names to scan for. This refuses the whole class in one rule,
         * regardless of file name or directory, which no name list can do.
         *
         * Covers {@see Generator::SCRIPT_EXTENSIONS}, not just .php, and the widening is
         * not about execution - if the file existed, -f would be true and this rule would
         * never fire. Blocking execution is uploads_no_exec's job, not this one. It is
         * about cost: a missing /shell.phtml or /admin.aspx falls through core's own !-f
         * rewrite to index.php exactly as a missing .php does, and buys the same full
         * themed 404. Scan lists carry them together.
         *
         * Widening REDUCES this rule's risk rather than raising it. The only false
         * positive it can produce is an address registered through add_rewrite_rule()
         * with no file behind it, and those exist for .php in the long tail; the added
         * extensions have no virtual form at all on this stack.
         *
         * Renamed from NoPhantomPhp on 2026-08-25, along with its marker, its setting and
         * its config keys, because "Php" stopped being true. The old marker is swept from
         * .htaccess on the next save by {@see Writer::sweep_orphans()} - it is no longer
         * in {@see Generator::block_order()}, so it reads as a block from an older release,
         * which is exactly what it is.
         *
         * Until 2026-08-25 the emitted rule matched only \.php$ while the allow-list
         * validator below already accepted php|php[0-9]|phtml, so an admin could allow
         * api/notify.phtml, have it accepted, and get an entry that exempted it from a
         * denial that was never going to happen. Both now read the same constant.
         *
         * The cost argument is the point. Without this, a missing .php falls through to
         * the WordPress front controller, which boots the whole stack and renders a
         * themed 404 - tens of kilobytes and a fistful of database queries per request.
         * A scanner sending those faster than PHP can serve them is a denial of service
         * whether or not it was meant as one. With this, the reply is a stat() and a
         * static 403, and PHP is never started.
         *
         * It is mod_rewrite rather than authz because there is no authz equivalent: the
         * decision needs a filesystem test, and neither <Files> nor <If> can ask whether
         * the target exists.
         *
         * A SEPARATE marker despite being mod_rewrite, which rule 2 in the class docblock
         * would otherwise argue against. Rule 2 is about interdependence, and this rule
         * has none: it never fires on a request the gate rules act on, because every
         * address those rules touch - wp-login.php, the secret slug, admin-ajax.php - is
         * either a real file or not a .php address at all. Its own marker means it can be
         * switched off without rewriting the gate.
         *
         * KNOWN LIMIT, and the reason this is not on by default: the premise fails for a
         * plugin that registers a .php address through add_rewrite_rule(), which a few
         * payment IPN callbacks, membership plugins and sitemap plugins do. The failure
         * is a silent 403 on a URL a third party calls, so it can go unnoticed for weeks.
         * The allow list is the escape hatch.
         *
         * NOT emitted on a subdirectory multisite network - see
         * {@see ServerInfo::is_subdirectory_multisite()}, where core itself serves .php
         * addresses that have no file behind them.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_no_phantom_scripts(): ?string
        {
        }
        /**
         * Deny the file names published web shells are shipped under.
         *
         * See {@see Generator::KNOWN_SHELL_NAMES} for what this is and, more
         * importantly, what it is not. Short version: it reaches a planted backdoor at
         * the docroot, which nothing else here does, and a rename defeats it.
         *
         * <FilesMatch> rather than <If>, because the target is a set of literal
         * basenames: no ap_expr, no REQUEST_URI, works on 2.2, and it applies in every
         * directory below the docroot without naming any of them.
         *
         * The PHP_NEVER_DENY filter should never remove anything. It is here so that a
         * careless future addition to the shell list cannot take a site off the air, and
         * it is the same reasoning as {@see Generator::is_deniable_name()} - the cost of
         * being wrong is a site nobody can repair from the admin screens, so the guard
         * belongs in the generator rather than in a warning somebody will not read.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_deny_known_shells(): ?string
        {
        }
        /**
         * Refuse program files under wp-content that are asked for by address.
         *
         * Was DRAFT from 2026-08-26 and marked "not to be shipped until verified". All
         * three checks were done on 2026-10-07 and all three came back in this rule's
         * favour, so the label is gone. They are kept below because each one is the
         * answer to a question a reader will have again:
         *
         *  1. ANSWERED 2026-10-07. What .php addresses real traffic asks for, measured
         *     on tivnet.com over 5,000 log lines: /wp/wp-cron.php 309 times and
         *     /wp/wp-admin/admin-ajax.php once, and nothing else answered 200. Both are
         *     outside the content folder, which is what "WHY IT CAN BE THIS BROAD"
         *     below asserts. Zero legitimate requests for a .php under the content
         *     folder on that day or the one before. Against that, about 95 hostile
         *     probes into the content folder in a single day from a dozen addresses -
         *     uploads/1.php, languages/NNUEU.php, plugins/fix/up.php,
         *     upgrade/wp-firewall.php - one address walking 40 of them in 70 seconds.
         *     Caveat kept on purpose: one site, a one-day window, and a site whose
         *     content folder is renamed, so the hostile half is quieter than a standard
         *     layout would see. The 200-answering half is what generalises.
         *  2. ANSWERED 2026-10-07, and the answer is NO - a child .htaccess cannot undo
         *     it. Measured on Apache 2.4.63 with AllowOverride All: a child holding
         *     "Require all granted" AND "RewriteEngine On" still got 403. The worry was
         *     right about AuthMerging and wrong about the consequence, because <If> is
         *     evaluated in its own later walk phase and merges AFTER the child's
         *     directory config, so replacement never gets the chance to apply. The
         *     uploads rule named here as sharing the limit turned out to be the one
         *     that HAD it, being mod_rewrite at the time; it was converted to authz the
         *     same day. {@see Generator::block_uploads_no_exec()}.
         *  3. ANSWERED 2026-10-07. The block editor, the customiser and the WooCommerce
         *     screens are unaffected, by the only measure that decides it: whether they
         *     ask for an address this rule refuses. Every enqueue hook those screens use
         *     was fired and all 804 registered scripts and styles inspected - NOT ONE
         *     has a .php address, under the content folder or anywhere else. Checked
         *     alongside it: no installed plugin or theme builds such a URL through
         *     plugins_url(), content_url(), plugin_dir_url() or either theme-directory
         *     helper, and no row of wp_posts, wp_postmeta, wp_options or wp_termmeta
         *     references one. A click-through would prove this for the assets one path
         *     happens to load; the registry proves it for all of them.
         *
         * WHY IT EXISTS. The target is the plugin file that was never meant to be
         * reached from outside - the include that assumes WordPress is already loaded
         * and carries no `defined( 'ABSPATH' ) || exit;` guard. Calling one directly
         * runs it with no WordPress, no current user and no nonce, which is one of the
         * most common plugin vulnerability shapes there is. No name list can cover it,
         * because the names belong to whichever plugins a site happens to have.
         *
         * WHY IT CAN BE THIS BROAD. Every .php address core needs is OUTSIDE wp-content:
         * index.php, wp-login.php, wp-cron.php, wp-comments-post.php and everything
         * under wp-admin/. With pretty permalinks no post, page, product, archive, feed
         * or REST address contains ".php" at all. So the whole legitimate surface this
         * could collide with is third-party files, which is exactly what the allow list
         * is for.
         *
         * NOT the same rule as {@see Generator::block_no_phantom_scripts()}, and the
         * difference is the point of having both. That one fires only when there is NO
         * file (`!-f`), so it stops the scan and never touches a file that exists - a
         * planted shell.php runs regardless. This one is a pure address test in the
         * authz phase and does not care whether the file is there, which is what makes
         * it the only rule here that refuses a backdoor already sitting in a plugin
         * folder.
         *
         * OVERLAPS the uploads rule for /wp-content/uploads/, deliberately. Neither
         * supersedes the other: uploads_no_exec still matters on a site whose uploads
         * folder was moved out of wp-content, where content_subpath does not reach it.
         *
         * Authz rather than mod_rewrite because no filesystem test is needed, so it
         * settles in the cheapest phase available and before mod_rewrite runs at all.
         *
         * PHP_EXTENSIONS, not SCRIPT_EXTENSIONS. This rule is about a file that exists
         * and would execute; .aspx under wp-content executes nothing on this stack, and
         * a missing one is already the other rule's business. The trailing (\.|$) is
         * what catches the double-extension disguise, shell.php.jpg.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_deny_content_php(): ?string
        {
        }
        /**
         * Refuse program files anywhere under an /uploads/ path.
         *
         * AUTHZ, NOT MOD_REWRITE, and that is the reason this builder exists at all. It
         * was a RewriteRule [F] inside {@see Generator::block_apache_hardening()} until
         * 2026-10-07, when the child-.htaccess question raised in
         * {@see Generator::block_deny_content_php()} was finally measured on Apache
         * 2.4.63 with AllowOverride All. The answer came back the opposite way round
         * from the one that docblock feared:
         *
         *   request                       child .htaccess holds          result
         *   /tivapp/uploads/both/f.php    grant + RewriteEngine On       403  (authz)
         *   /other/uploads/granted/y.php  Require all granted            403  (rewrite)
         *   /other/uploads/rw/z.php       RewriteEngine On               200  BYPASSED
         *   /other/uploads/both/w.php     grant + RewriteEngine On       200  BYPASSED
         *
         * One mod_rewrite directive in a child .htaccess DISCARDS the parent's rewrite
         * rules for that directory - per-directory rewrite configuration is not
         * inherited - so a bare `RewriteEngine On` was enough to have the file served.
         * An authz deny inside <If> is immune, because <If> is evaluated in its own
         * later walk phase and merges AFTER the child's directory config, so
         * AuthMerging's replacement never gets the chance to apply. `RewriteOptions
         * InheritDownBefore` in the parent does NOT repair the rewrite form: it was
         * tried and changed nothing.
         *
         * This rule was the worst possible place for that weakness. The only attacker
         * it defends against is one who can already write into uploads/, and anybody
         * who can drop shell.php there can usually drop .htaccess beside it - so it was
         * sidesteppable in precisely the scenario it exists for.
         *
         * Nothing was lost in the move. It is a pure address test with no filesystem
         * condition, so it never needed rewrite machinery, and the ordering note in
         * block_apache_hardening() called it "independent, but cheap to keep together"
         * - a convenience, never a dependency. Authz also settles it in a cheaper phase,
         * before mod_rewrite runs at all.
         *
         * A path match in the root file rather than a per-directory uploads/.htaccess,
         * so the plugin never needs to write outside the site root. The /uploads/
         * segment match covers wp-content/uploads and app/uploads alike, and the
         * trailing (\.|$) catches double extensions such as shell.php.jpg.
         *
         * OVERLAPS block_deny_content_php() on a standard layout, deliberately. Neither
         * supersedes the other: this one still reaches an uploads folder that was moved
         * out of the content directory, where content_subpath cannot see it.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_uploads_no_exec(): ?string
        {
        }
        /**
         * Deny the dangerous REST endpoints.
         *
         * Two independent conditions, deliberately kept separate:
         *
         * (A) The QUERY form, ?rest_route=. With pretty permalinks, core uses /wp-json/
         *     and nothing legitimate produces this - so it needs no exemption at all and
         *     works identically whether or not the gate is on. This is the form the
         *     wp2shell attack used.
         *
         * (B) The PATH form, /wp-json/batch/. The block widgets screen saves through
         *     /wp-json/batch/v1 - an OPTIONS to read the batch limit, then a POST - and
         *     it does so on classic themes too, because it is a multi-entity save.
         *     Denying it unconditionally makes "Update" fail with a bare "there was an
         *     error" and no PHP error anywhere, because Apache refuses in the authz
         *     phase before WordPress runs. So this half needs an exemption, and the only
         *     trustworthy one is the gate cookie.
         *
         * The cookie clause is emitted ONLY when the gate is genuinely configured. With
         * an empty slug it would read m##, which matches every request that carries any
         * such cookie - inverting the protection into a one-line bypass.
         *
         * No loopback exemption here. Behind a same-host reverse proxy every request
         * looks like loopback, and loopback has no business reaching the batch endpoint;
         * rest_url() returns /wp-json/ under pretty permalinks, so Site Health's own
         * loopback check never produces this form anyway.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_dangerous_endpoints(): ?string
        {
        }
        /**
         * Deny xmlrpc.php.
         *
         * <Files>, not <If>: the target is a bare file name, so the simplest container
         * does the job. It works on Apache 2.2 as well as 2.4, needs no regex engine,
         * and unlike a REQUEST_URI regex it cannot match some other path that merely
         * contains "xmlrpc.php".
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_xmlrpc(): ?string
        {
        }
        /**
         * Deny author and user enumeration.
         *
         * The author base is read from the rewrite rules, not hardcoded to "author",
         * and the path is anchored at the site's home path rather than the domain root,
         * so this works on a subdirectory install.
         *
         * The REST /wp/v2/users endpoint and oembed are NOT here. They need real
         * authentication, and the only .htaccess proxy for "logged in" is the
         * wordpress_logged_in_ cookie, whose name is public and whose value Apache
         * cannot validate - it is HMAC-signed with the site's keys. A forged cookie
         * would walk straight past. That job belongs in PHP.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_author_enumeration(): ?string
        {
        }
        /**
         * Options hardening.
         *
         * Only "-" flags, so this merges with inherited options rather than replacing
         * them and cannot accidentally strip +FollowSymLinks.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_options(): ?string
        {
        }
        /**
         * Cheap error documents.
         *
         * Off by default: plenty of sites have a branded 404, and this replaces it
         * without asking.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_error_documents(): ?string
        {
        }
        /**
         * Response headers.
         *
         * "always set" rather than "add", so a duplicate from another source is
         * replaced rather than appended - two X-Frame-Options headers can make a
         * browser ignore both.
         *
         * X-XSS-Protection is deliberately absent: deprecated, removed from modern
         * browsers, and it has caused problems of its own. Do not add it.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_security_headers(): ?string
        {
        }
        /**
         * Bad-bot user-agent blocking.
         *
         * Authz rather than mod_rewrite: a rewrite-based block does not inherit once a
         * vhost enables RewriteEngine for permalinks.
         *
         * A DENIAL INSIDE <If>, NEVER A TOP-LEVEL GRANT. Until 2026-10-04 this emitted
         * "<RequireAny> Require ip loopback / <RequireAll> Require all granted, Require
         * not env ... </RequireAll> </RequireAny>" at the top level of the file. That
         * GRANTS access to everyone who is not a bot, and a top-level grant is not
         * contained to our block:
         *
         * - Apache wraps every top-level Require in one .htaccess in an implicit
         *   <RequireAny>. Another plugin's top-level "Require ip 203.0.113.5" or
         *   "Require all denied" (a lockdown, a maintenance mode) became "theirs OR
         *   ours", and ours lets everyone in - their restriction silently stopped
         *   working. A foreign "Require all granted" cancelled ours the same way.
         * - Under the default AuthMerging Off, Require lines in .htaccess REPLACE the
         *   server config's for the directory. A staging site password-protected in the
         *   vhost ("Require valid-user") or limited by IP went public the moment this
         *   block was switched on.
         *
         * Inside <If>, the block only ever says "deny this request". It cannot open
         * anything, so it cannot combine with or replace anyone's restriction - the same
         * shape every other deny block here already has.
         *
         * THE USER AGENT IS MATCHED INSIDE THE <If>, NOT VIA SetEnvIf. The 2026-10-04
         * version tested `reqenv('tiv_wooat_bad_bot')` set by SetEnvIfNoCase, and that is
         * WRONG: Apache evaluates <If> conditions in ap_if_walk(), which runs BEFORE the
         * header-parser hook where a per-directory SetEnvIf sets the variable. So the
         * variable was always empty when the condition was tested. It still appeared to
         * work on "/": mod_dir serves the directory index through a subrequest, which
         * inherits the main request's (by then populated) environment and re-runs the
         * <If>. Every pretty permalink - /shop/, /robots.txt - goes through mod_rewrite's
         * internal redirect instead, which renames the variable to REDIRECT_..., so it
         * was never blocked. Found 2026-10-06 by the tiv-etc sitecheck `bot-path` probe
         * (nikto on /robots.txt -> 200 while nikto on / -> 403).
         * %{HTTP_USER_AGENT} is a request header, available when <If> is evaluated, so
         * matching it directly needs no second module and no phase ordering.
         *
         * APACHE 2.4 ONLY, and safely so. The whole <If> sits inside
         * <IfModule mod_authz_core.c>: on 2.2, which has neither <If> nor that module,
         * the section is skipped unparsed - no protection there, but no 500. The old 2.2
         * branch ("Order allow,deny / Allow from all") was itself a top-level grant
         * with the same problem, so it goes rather than being kept as a fallback.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_bad_bots(): ?string
        {
        }
        /**
         * The ordered mod_rewrite block.
         *
         * Everything here is order-sensitive, which is exactly why it is ONE marker:
         *
         *   1. logout to home    [R=301,L]  MUST precede the gate
         *   2. secret cookie set [L,R,CO]   MUST precede the gate
         *   3. logout exemption  [L,CO]     MUST precede the gate
         *   4. the gate          [R=404,L]  LAST
         *
         * Rule 1 must be ahead of rule 4 because after logout the cookie no longer
         * holds the secret, so the gate would otherwise 404 the ?loggedout=true request.
         *
         * The uploads no-exec rule was a fifth member, first in the list and labelled
         * "independent, but cheap to keep together". It left on 2026-10-07: being
         * mod_rewrite was not a neutral convenience but a bypass, so it is now authz
         * under its own marker. {@see Generator::block_uploads_no_exec()}. Nothing that
         * remains here is order-independent, so there is no longer a reason for a
         * guest in this block.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_apache_hardening(): ?string
        {
        }
        /**
         * The regex that matches the gate cookie.
         *
         * Both halves are values this plugin generates and validates - the cookie name
         * is "tivwp_" plus hex, and the slug is checked against [A-Za-z0-9_-]. Neither
         * can contain a regex metacharacter, so no escaping is needed and the emitted
         * rule stays readable. The guard is belt and braces: if either value ever stops
         * being safe, escape rather than emit something that silently matches wrongly.
         *
         * @since 2.0.0
         * @return string
         */
        protected function cookie_pattern(): string
        {
        }
        /**
         * After logout, land on the home page.
         *
         * Standalone - it works with the gate off. The query test is anchored so that
         * "?xloggedout=true" does not match.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function rule_logout_to_home(): ?string
        {
        }
        /**
         * The secret-login cookie-set, the logout exemption and the gate.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function rules_secret_login(): ?string
        {
        }
        /**
         * The gate's denial: login, admin, signup and REST answer 404 without the cookie.
         *
         * SEPARATED FROM THE REWRITE RULES ON 2026-10-07, and the separation is the
         * point. As a RewriteRule this was bypassable: per-directory rewrite
         * configuration is not inherited, so ONE rewrite directive in a child
         * .htaccess discards the parent's rewrite rules for that directory. Measured -
         * a wp-admin/.htaccess containing nothing but "RewriteEngine On" served the
         * dashboard to an un-cookied request that was otherwise 404:
         *
         *   /wp/wp-admin/index.php   no child .htaccess        404
         *   /wp2/wp-admin/index.php  child: RewriteEngine On   200  <- gate off
         *   /wp3/wp-admin/index.php  child: Require all granted 404
         *
         * The author of such a file is usually not an attacker - one with file write is
         * already in - but a security plugin that password-protects wp-admin, or a host.
         * The owner then believes the login page is hidden when it is not.
         *
         * WHY mod_alias AND NOT authz, which is what the uploads rule moved to. The gate
         * answers 404 ON PURPOSE so it is not advertised, and `Require all denied` can
         * only answer 403; ErrorDocument changes a body, never a status. RedirectMatch
         * can return 404, mod_alias survives a child .htaccess (measured), and
         * RedirectMatch works inside <If>, which is the part that merges AFTER the
         * child's directory config.
         *
         * WHY THE loggedout EXCLUSION. Logging out ends at wp-login.php?loggedout=true
         * with the cookie already cleared, so the gate would deny the very request
         * rule_logout_to_home() exists to redirect. In the old all-rewrite form the
         * ordering was guaranteed by position in one block. Across two modules it is
         * not: it depends on whether mod_rewrite or mod_alias wins the fixup phase.
         * mod_rewrite does win on 2.4.63 - measured, the 301 happens - but that is hook
         * priority between two modules, not a contract. One extra condition removes the
         * dependency, so the gate is correct whichever module runs first.
         *
         * WHY THE action=logout EXCLUSION. rules_secret_login() lets logout through
         * with a rewrite [L], but [L] only ends mod_rewrite - it cannot exempt anything
         * from this mod_alias rule, so without its own clause here logout needs the
         * cookie. The cookie is a session cookie and WordPress "Remember me" lasts 14
         * days, so after a browser restart a still-logged-in admin got a 404 from the
         * logout link and could not log out. Measured 2026-10-08 on the paywall demo.
         * The clause is as narrow as the rewrite rule: GET, the login URL exactly, and
         * action=logout as a whole parameter. What it reveals - that wp-login.php
         * exists, via the logout-confirm page - the rewrite gate revealed as well.
         *
         * WHY THE wp-admin/js AND wp-admin/css EXCLUSION. Core keeps a few front-end
         * assets there. WooCommerce enqueues `password-strength-meter`
         * (wp-admin/js/password-strength-meter.min.js) on checkout and My Account for
         * logged-out visitors, so the gate 404'd it and the account-password field threw
         * a JS error at checkout. Found 2026-11-15 in the wpglobus.com and paywall demo
         * access logs. The clause is narrow: one file name, .js or .css, directly in
         * those two folders - no subfolder, no '..', no PHP. Folders and every other
         * wp-admin path stay gated.
         *
         * The mod_rewrite form is kept as a fallback for a server with no mod_alias,
         * because a security rule must not fail OPEN - the same reasoning as the
         * `<IfModule !mod_authz_core.c>` arm of {@see Apache::deny()}. It carries its
         * own RewriteEngine and RewriteBase, as every rewrite block here must.
         *
         * @since 2.0.0
         * @return string|null
         */
        protected function block_secret_login_gate(): ?string
        {
        }
    }
    /**
     * Class Maintenance
     *
     * Rebuilding and removing the generated blocks outside the settings-save flow.
     *
     * {@see Maintenance::remove_all()} is the recovery path for a lockout - a gate
     * whose secret has been lost, say. It is reached from WP-CLI, NOT from a
     * deactivation hook: see the comment in {@see \TIV_WOOAT\App} for why cleaning up
     * on deactivation was removed. The point of this being callable without wp-admin
     * is that wp-admin is exactly what a lockout takes away.
     *
     * @since 2.0.0
     */
    class Maintenance
    {
        /**
         * Regenerate every block from the stored settings.
         *
         * Safe to call at any time: it reads the options table, not a submitted form.
         *
         * @since 2.0.0
         * @return true|string True on success, otherwise the reason.
         */
        public static function rebuild()
        {
        }
        /**
         * Remove every block this plugin owns.
         *
         * @since 2.0.0
         * @return true|string True on success, otherwise the reason.
         */
        public static function remove_all()
        {
        }
        /**
         * A preview of what would be written, without writing it.
         *
         * Built by the same code that performs the write, so it cannot drift from the
         * real result.
         *
         * @since 2.0.0
         * @return string
         */
        public static function preview(): string
        {
        }
        /**
         * Only the generated part, for display.
         *
         * @since 2.0.0
         * @return string
         */
        public static function preview_blocks_only(): string
        {
        }
    }
    /**
     * Class Registry
     *
     * The set of marker names the CURRENT code can generate. Anything in .htaccess
     * that carries our prefix and is not in this set was written by a version of this
     * plugin that no longer exists, and is swept on the next write.
     *
     * Why this is needed: {@see Writer::build()} used to strip only the markers it was
     * handed, and a save hands it the markers the saving module knows about today. A
     * block that an older release wrote and a newer release no longer generates was
     * therefore never stripped by anything - it survived every save and every rebuild,
     * permanently, still being applied by Apache with nothing in the settings screen
     * admitting it existed. `UploadsNoExec` is the live example: it is present on nine
     * production sites and was folded into `ApacheHardening`, so without this sweep
     * those sites would run the stale block and the new rule side by side.
     *
     * Only NAMES are collected here, never bodies. That matters: asking a module for
     * its bodies means calling `blocks()`, which for the unconverted modules reads
     * `$_POST` and would answer "nothing" for every module except the one being saved
     * - turning a save of one tab into a deletion of every other tab's block. Names
     * come from the class list alone and are the same whatever is being saved.
     *
     * @since 2.0.0
     */
    class Registry
    {
        /**
         * Every marker the current code can generate.
         *
         * @since 2.0.0
         * @return string[] Full marker names.
         * @noinspection PhpUndefinedMethodInspection
         */
        /**
         * Every block every module would write, built from the stored settings.
         *
         * WHY THIS EXISTS. Maintenance::rebuild() used to build from ApacheHardening
         * alone, which is 20 of the 22 blocks: ModExpires and PHPSettings write their
         * own, on their own save hooks, and a rebuild never called them. They were not
         * destroyed - owned_markers() below recognises them, so sweep_orphans() leaves
         * them alone - but they were not refreshed either, while the method's docblock
         * said "every block".
         *
         * The damage showed in the documented recovery path. remove_all() IS complete,
         * because it works from the markers actually in the file, so:
         *
         *     wp tiv-wooat htaccess remove     removes all 22, the owner gets back in
         *     wp tiv-wooat htaccess rebuild    restores 20
         *
         * and the PHP settings and expiry rules were silently gone, with nothing saying
         * so. For a path whose whole purpose is recovering from a lockout, quietly
         * restoring less than it removed is the wrong failure.
         *
         * SAFE TO INSTANTIATE HERE. The modules have no constructor - hooks are attached
         * by setup_hooks(), which is not called - and all three register setup_fields()
         * on 'init', which has already run by the time any command or save reaches this.
         * That matters: the inherited blocks() builds from static::$options, and an empty
         * options array means "no values", which renders as a null block and would DELETE
         * the marker rather than rebuild it.
         *
         * @since 2.0.0
         * @return array<string, string|null> Marker name => body, or null to remove.
         */
        public static function all_blocks(): array
        {
        }
        public static function owned_markers(): array
        {
        }
        /**
         * The HTAccess module classes present in this build.
         *
         * Read from the filesystem rather than from a hand-kept list, so deleting a
         * module file is enough to retire its marker - which is exactly the "a new
         * version changed the blocks" case this class exists for.
         *
         * Mirrors how {@see \TIV_WOOAT\Modules\ModulesController::setup_hooks()} finds
         * modules. If that ever changes, this must change with it.
         *
         * @since 2.0.0
         * @return string[] Fully qualified class names.
         */
        protected static function module_classes(): array
        {
        }
    }
    /**
     * Class ServerInfo
     *
     * Detection ADVISES, it never decides (spec P8). Nothing in this class may flip a
     * default, pre-check a box, grey out a control or refuse a save. The two
     * exceptions, both outside that rule, are capability gating ($is_apache already
     * decides whether the sections exist at all) and input validation.
     *
     * @since 2.0.0
     */
    class ServerInfo
    {
        /**
         * WordPress core release that fixed the REST batch issue.
         *
         * Kept in one place so the comparison does not rot across the codebase.
         *
         * @since 2.0.0
         * @var string
         */
        public const CORE_BATCH_FIXED = '6.9.5';
        /**
         * True when the server reads .htaccess.
         *
         * WordPress sets $is_apache for both Apache and LiteSpeed, which is correct:
         * LiteSpeed reads .htaccess. It says nothing about PHP's SAPI - see
         * {@see ServerInfo::is_mod_php()}.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function is_apache(): bool
        {
        }
        /**
         * Raw SERVER_SOFTWARE string.
         *
         * @since 2.0.0
         * @return string
         */
        public static function server_software(): string
        {
        }
        /**
         * True when PHP runs as an Apache module.
         *
         * This is a DIFFERENT question from {@see ServerInfo::is_apache()}. Apache with
         * PHP-FPM is the normal modern configuration: .htaccess works perfectly and
         * php_value / php_flag are unrecognised directives that produce a 500 unless
         * guarded. Only the PHP Settings block cares.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function is_mod_php(): bool
        {
        }
        /**
         * True when we positively know mod_rewrite is NOT loaded.
         *
         * Named and shaped like {@see ServerInfo::is_known_pre_24()} for the same reason:
         * the useful answer is not "is it there" but "are we sure it is not", because
         * only the second is safe to warn an admin about.
         *
         * WHY IT MATTERS. {@see \TIV_WOOAT\HTAccess\Apache::rewrite_block()} wraps every
         * rewrite body in <IfModule mod_rewrite.c>, so on a server without the module
         * those rules are skipped silently rather than erroring - and two of our blocks
         * are rewrite blocks, one of them the secret login gate. That is the dangerous
         * kind of failure: the settings screen goes on reporting that the login address
         * is hidden while Apache is hiding nothing.
         *
         * DELEGATED TO CORE. got_mod_rewrite() calls
         * apache_mod_loaded( 'mod_rewrite', true ), which tries apache_get_modules() and
         * falls back to scraping phpinfo( INFO_MODULES ) when PHP is not an Apache
         * module - a fallback we would otherwise have to write. It also carries the
         * 'got_rewrite' filter, which hosts use to correct the answer for their stack.
         *
         * THE $is_apache GUARD IS NOT BELT AND BRACES. apache_mod_loaded() opens with
         * "if ( ! $is_apache ) return false;" BEFORE it ever considers its own true
         * default, so on any non-Apache request it reports the module missing rather
         * than unknown. Measured under WP-CLI 2026-09-09: got_mod_rewrite() returned
         * false on a box where mod_rewrite is demonstrably loaded, purely because
         * $is_apache is unset there. Without this guard the warning would fire on every
         * nginx site, and on any of our own code that ran outside a web request.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function mod_rewrite_known_missing(): bool
        {
        }
        /**
         * The <IfModule> names that can guard php_value / php_flag.
         *
         * PHP 8 registers php_module, PHP 7 registers php7_module. Emitting the wrong
         * one makes the block a silent no-op; emitting none makes it a 500.
         *
         * BOTH, NOT A GUESS. Until 2026-10-04 this picked one from PHP_VERSION_ID - the
         * version of the process WRITING the file. From WP-CLI that is the command-line
         * PHP, which need not be the one Apache loads: a PHP 8 CLI on a server whose
         * Apache still loads PHP 7 wrote php_module, and every setting silently did
         * nothing. Apache can load only one PHP module at a time, so emitting a section
         * per name applies the directives exactly once, whichever it is. Requires PHP
         * 7.4, so no older name is needed.
         *
         * @since 2.0.0
         * @since 2.0.0 Was mod_php_guard(), returning one name.
         * @return string[]
         */
        public static function mod_php_guards(): array
        {
        }
        /**
         * Apache version, if the server is willing to say.
         *
         * Deliberately best-effort. apache_get_version() exists only under mod_php, and
         * SERVER_SOFTWARE is truncated by ServerTokens: "Prod" reports bare "Apache"
         * with no version at all, and Prod is standard hardening advice. Detection is
         * therefore weakest on exactly the servers most likely to run this plugin.
         *
         * Callers must treat an empty return as "unknown", never as "old".
         *
         * @since 2.0.0
         * @return string Empty when the version could not be determined.
         */
        public static function apache_version(): string
        {
        }
        /**
         * True when we positively know the server is older than Apache 2.4.
         *
         * Returns false when the version is unknown, because "unknown" is the common
         * case on hardened servers and must not be reported as a problem.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function is_known_pre_24(): bool
        {
        }
        /**
         * True when this is a multisite network addressed by SUBDIRECTORY.
         *
         * This one detection does decide rather than advise, and the reason is narrow:
         * on a subdirectory network the core rewrite rules deliberately serve addresses
         * that have no file behind them. /site-two/wp-admin/admin-ajax.php and
         * /site-two/wp-login.php are both routed by
         * "RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]" to a file one level up, so
         * a "the file must exist" test refuses the entire admin of every site except the
         * first. That is not a preference the owner can be warned about and left to
         * choose - it is the block being wrong for the platform.
         *
         * A subDOMAIN network has no such prefix and is unaffected.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function is_subdirectory_multisite(): bool
        {
        }
        /**
         * True when the site uses pretty permalinks.
         *
         * With plain permalinks, ?rest_route= IS the REST API, and blocking the query
         * form takes the block editor and the WooCommerce admin offline. Advisory only.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function has_pretty_permalinks(): bool
        {
        }
        /**
         * True when the running WordPress predates the REST batch fix.
         *
         * An unparseable version returns false - "unknown or newer than we know about"
         * must not raise an alarm.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function core_needs_batch_block(): bool
        {
        }
        /**
         * Plugins whose behaviour overlaps a block, keyed by the setting they advise on.
         *
         * Values are plugin-directory slugs. Matching is done on the directory name so
         * a renamed main file still matches.
         *
         * @since 2.0.0
         * @return array<string, array<string, string>>
         */
        protected static function conflict_map(): array
        {
        }
        /**
         * Active plugin directory slugs.
         *
         * @since 2.0.0
         * @return string[]
         */
        public static function active_plugin_slugs(): array
        {
        }
        /**
         * Names of active plugins that overlap the given setting.
         *
         * Advisory only. A plugin can be active with the overlapping feature switched
         * off, and a site can use XML-RPC through something not on this list, so a
         * result here is information for the admin and never an input to a default.
         *
         * @since 2.0.0
         *
         * @param string $setting_id Setting the caller is rendering.
         *
         * @return string[] Human-readable plugin names.
         */
        public static function conflicting_plugins(string $setting_id): array
        {
        }
    }
    /**
     * Class SitePaths
     *
     * Everything the generator can compute that a hand-written .htaccess cannot.
     * This is the reason for having a generator at all: the live fleet hardcodes
     * "RewriteBase /", "wp/wp-login.php" and "^/author(/|$)", none of which are
     * portable to a site we have not seen.
     *
     * @since 2.0.0
     */
    class SitePaths
    {
        /**
         * Path component of home_url(), always leading and trailing slashed.
         *
         * "/" on a root install, "/shop/" when WordPress serves a subdirectory.
         *
         * @since 2.0.0
         * @return string
         */
        public static function home_path(): string
        {
        }
        /**
         * Normalize a URL path to leading + trailing slashes.
         *
         * The root case must produce "/" and not "//": a doubled slash in RewriteBase
         * silently changes how every relative rewrite target resolves.
         *
         * @since 2.0.0
         *
         * @param string $path Raw path component.
         *
         * @return string
         */
        protected static function as_dir_path(string $path): string
        {
        }
        /**
         * Path component of site_url(), always leading and trailing slashed.
         *
         * @since 2.0.0
         * @return string
         */
        public static function site_path(): string
        {
        }
        /**
         * Value for RewriteBase.
         *
         * Derived from the HOME path, not siteurl: RewriteBase is the front-end base
         * against which relative rewrite targets resolve.
         *
         * @since 2.0.0
         * @return string
         */
        public static function rewrite_base(): string
        {
        }
        /**
         * Subdirectory holding WordPress core, relative to the home path.
         *
         * Empty on a normal install; "wp/" on a "skeleton" layout where core lives
         * under /wp/. Used by exactly two rules - the secret-login redirect target and
         * the anchored logout match. The gate's own wp-(login|admin|json|signup) test
         * is a substring and is already prefix-agnostic.
         *
         * @since 2.0.0
         * @return string
         */
        public static function core_subpath(): string
        {
        }
        /**
         * Path to wp-login.php as it appears in a rewrite target, relative to RewriteBase.
         *
         * @since 2.0.0
         * @return string
         */
        public static function wp_login_relative(): string
        {
        }
        /**
         * Is wp-content where a default install would put it?
         *
         * Read from the FILESYSTEM, never from content_url(), and that is the whole point
         * of this method existing.
         *
         * content_url() is not stable between contexts. A wp-config that guards its
         * WP_CONTENT_URL definition with $_SERVER['HTTP_HOST'] - a common pattern, and
         * what wooat.org does - leaves the constant undefined under WP-CLI, where core
         * then falls back to site_url() . '/wp-content'. On a subdirectory install that
         * answers "/wp/wp-content" from the command line and "/wp-content" in a browser.
         * A rebuild driven off that would decide /wp-content/ was bogus and deny it, on a
         * site serving every image, stylesheet and script from exactly there - a total
         * outage, issued by the command documented as the way to recover from one.
         *
         * WP_CONTENT_DIR has no such problem: it is a plain constant from wp-config and
         * reads identically in every context.
         *
         * Fails SAFE. Undecidable means "yes, it is in the normal place", which keeps
         * wp-content out of the deny rule.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function content_at_home(): bool
        {
        }
        /**
         * Where wp-content sits, relative to the home path, e.g. "wp-content/" or "app/".
         *
         * The counterpart of {@see SitePaths::core_subpath()}, and derived the same way -
         * from the filesystem. content_url() cannot be used for this: see
         * {@see SitePaths::content_at_home()} for why it answers differently under WP-CLI
         * than it does in a browser.
         *
         * Empty when wp-content lives outside the site's own folder entirely, which is a
         * legitimate hardening layout and simply means there is no address for it here.
         *
         * @since 2.0.0
         * @return string
         */
        public static function content_subpath(): string
        {
        }
        /**
         * The wp-* folder names that resolve to nothing at the home path.
         *
         * On a site with core in a subdirectory, /wp-admin/ and /wp-includes/ address
         * nothing: the real ones are under core_subpath(). They are not 404s that Apache
         * settles cheaply either - core's own front-controller rewrite hands them to
         * WordPress, which renders a full themed 404 for each. Scanners ask for these
         * paths constantly, and unlike the script rules this also covers what they ask
         * for INSIDE them: readme.txt files, wlwmanifest.xml, uploads probes.
         *
         * wp-content is judged separately, because the two are independent. Core can be
         * in a subdirectory with wp-content still at the top (the Composer layout - that
         * is wooat.org), and core can be at the top with wp-content moved elsewhere.
         *
         * An EMPTY result means the rule must not be offered at all. On a normal install
         * /wp-admin/ is the admin, and denying it locks the owner out with no way back
         * except editing .htaccess by hand.
         *
         * @since 2.0.0
         * @return string[] Bare segment names, e.g. array( 'admin', 'includes' ).
         */
        public static function phantom_wp_segments(): array
        {
        }
        /**
         * The author archive base.
         *
         * Renameable: a site may use /writer/ or /by/. Defaults to "author".
         *
         * @since 2.0.0
         * @return string
         */
        public static function author_base(): string
        {
        }
        /**
         * True when the site is served over HTTPS.
         *
         * Read from home_url() rather than is_ssl(), because is_ssl() describes the
         * current request and this value is baked into a file that serves every request.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function is_https(): bool
        {
        }
        /**
         * The port a browser will put in the Host header, or '' when there is none.
         *
         * WHY THIS EXISTS. The secret-login gate sets its cookie with a mod_rewrite
         * `CO=` flag, whose fields are separated by colons:
         * NAME:VALUE:domain:lifetime:path:secure:httponly. The domain we pass is
         * `%{HTTP_HOST}`, and **HTTP_HOST carries the port whenever it is not the
         * default for the scheme** - so the colon inside it splits the field list and
         * every later field shifts one place. Measured 2026-10-07 against one rule,
         * varying only the Host header:
         *
         *   Host: 127.0.0.1:8095 -> path=0; domain=127.0.0.1; expires=...; SameSite=HttpOnly
         *   Host: example.test   -> path=/; domain=example.test; secure; HttpOnly
         *
         * `path=0` never matches /wp-admin/, so the browser stops sending the cookie and
         * the gate 404s the owner out of their own site, with `secure` and `HttpOnly`
         * lost on the way. Nothing can be escaped: the CO flag has no quoting.
         *
         * So the gate REFUSES to run on such a site rather than emit a lockout.
         * {@see Config::gate_is_active()}.
         *
         * Same failure family as the empty-domain bug recorded in
         * {@see Generator::rules_secret_login()} - "Apache skips empty tokens when
         * splitting, so every later field shifts one place" - a different trigger for
         * the same shift.
         *
         * home_url() rather than $_SERVER, for is_https()'s reason: this value is baked
         * into a file that serves every request, not just this one.
         *
         * A port EQUAL to the scheme's default is not reported. Browsers leave the
         * default port out of the Host header, so "https://example.com:443" produces
         * "example.com" and carries no colon. Only a genuinely non-default port does.
         *
         * @since 2.0.0
         * @return string The port as written, e.g. "8443", or '' when the Host header
         *                will not carry one.
         */
        public static function host_port(): string
        {
        }
        /**
         * Absolute path of the directory holding the root .htaccess.
         *
         * @since 2.0.0
         * @return string
         */
        public static function home_dir(): string
        {
        }
        /**
         * Absolute path of the root .htaccess.
         *
         * @since 2.0.0
         * @return string
         */
        public static function htaccess_file(): string
        {
        }
    }
    /**
     * Class Slug
     *
     * The secret-login gate is obscurity in depth, never authentication. Publishing
     * the mechanism is fine - the secret is the slug, not the design, and unlike the
     * login-rename approach the surveyed plugins ship, WordPress core never emits our
     * slug anywhere. What publication does change is that the parameters have to be
     * right, which is what this class enforces.
     *
     * @since 2.0.0
     */
    class Slug
    {
        /**
         * Length below which a slug is weak enough to say so.
         *
         * A short slug plus the unavoidable response oracle - /<slug> answers 302 while
         * any other unknown path answers 404 - is brute-forceable. Three lowercase
         * letters is about 17,000 combinations.
         *
         * ADVISORY, not enforced. This was a hard floor baked into {@see self::PATTERN},
         * so it blocked the save in the browser, reverted it in the sanitize filter and
         * withheld the gate - three refusals for one opinion about length, on the wrong
         * side of the rule the rest of this module keeps: advise, never decide
         * ({@see \TIV_WOOAT\Modules\HTAccess\ApacheHardening::advisory()}). How long a
         * secret should be is the administrator's call. The SHAPE rules stay hard,
         * because a stray character there is a 500 for the whole site rather than a
         * weaker secret.
         *
         * @since 2.0.0
         * @var int
         */
        public const WARN_BELOW = 12;
        /**
         * Length we recommend and generate.
         *
         * @since 2.0.0
         * @var int
         */
        public const GOOD_LENGTH = 20;
        /**
         * Characters allowed in a slug, and the one hard length limit.
         *
         * Shape, not strength. There is deliberately no minimum here - see
         * {@see self::WARN_BELOW}. The 64 ceiling is not advice either way: the slug is
         * written into a RewriteRule, and nothing is served by carrying an unbounded
         * string into one.
         *
         * @since 2.0.0
         * @var string
         */
        public const PATTERN = '^[A-Za-z0-9_-]{1,64}$';
        /**
         * Is the secret-login feature available on this installation at all?
         *
         * A release flag, not a setting. The gate is the one feature here that can lock
         * an administrator out of their own site, and it is not ready to be handed to
         * strangers, so it stays behind a constant that only we set:
         *
         *     const TIV_WOOAT_SECRET_LOGIN = true;   // wp-config.php or a local include
         *
         * Undefined or false - the state every customer install is in - and the controls
         * are not rendered, so the gate can never be switched on there.
         *
         * It governs the OFFER, not the running. A site that already had the gate on
         * keeps it when the constant goes away: see
         * {@see Config::gate_is_active}, which deliberately ignores
         * this. Taking a config line away must not silently strip a live security measure
         * from someone's site, and the earlier design that did also stranded them - the
         * rules stayed in .htaccess until a write that only wp-admin could trigger, and
         * the gate was still 404ing wp-admin.
         *
         * The controls therefore stay visible while the setting is on
         * ({@see \TIV_WOOAT\Modules\HTAccess\ApacheHardening::gate_ui_visible()}), so
         * unticking is always reachable, and unticking is the one exit: it removes the
         * rules and then the controls disappear.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function feature_enabled(): bool
        {
        }
        /**
         * Generate a slug.
         *
         * @since 2.0.0
         * @return string
         */
        public static function generate(): string
        {
        }
        /**
         * Is this slug acceptable?
         *
         * Input validation, not environment detection: the plugin refusing to generate
         * something broken from its own field is outside the "detection only advises"
         * rule.
         *
         * @since 2.0.0
         *
         * @param string $slug Candidate.
         *
         * @return bool
         */
        public static function is_valid(string $slug): bool
        {
        }
        /**
         * Reason a slug cannot be used at all, for display.
         *
         * Hard failures only - the ones that leave the gate unable to run. A slug that
         * is merely short is not one of them; that is
         * {@see self::weakness_reason()}, which does not stop anything.
         *
         * @since 2.0.0
         *
         * @param string $slug Candidate.
         *
         * @return string Empty when the slug is usable.
         */
        public static function rejection_reason(string $slug): string
        {
        }
        /**
         * Reason a usable slug is weaker than it should be, for display.
         *
         * The gate runs either way. This is advice, and ignoring it is allowed.
         *
         * @since 2.0.0
         *
         * @param string $slug Candidate.
         *
         * @return string Empty when there is nothing to warn about.
         */
        public static function weakness_reason(string $slug): string
        {
        }
        /**
         * Per-site cookie name.
         *
         * Not the bare literal "tivwp": once the plugin is public that would be a
         * one-string fingerprint identifying every install, and a cookie set on one
         * site would be shaped exactly like a cookie for another. Derived from the site
         * URL and the site's own auth salt, so it is stable per site and not guessable
         * across sites.
         *
         * @since 2.0.0
         * @return string
         */
        public static function cookie_name(): string
        {
        }
    }
    /**
     * Class Writer
     *
     * Marker-based read-modify-write of .htaccess, with the discipline the surveyed
     * security plugins converged on: one lock-protected pass, temp file + atomic
     * rename, symlink refusal, and refusals that stop us breaking a site.
     *
     * All file access goes through {@see FS}, whose native family is atomic where
     * WP_Filesystem is not. The reasoning is in that class's docblock; the short
     * version is that Apache reads .htaccess on every request, so a half-written file
     * is a 500 for the whole site.
     *
     * If the file cannot be written, this class reports why and changes nothing. It
     * does not fall back to FTP and does not offer a paste-it-yourself form: on a
     * host where PHP cannot write .htaccess, saying so plainly is the honest answer.
     *
     * @since 2.0.0
     */
    class Writer
    {
        /**
         * Marker prefix for every block this plugin owns.
         *
         * @since 2.0.0
         * @var string
         */
        public const MARKER_PREFIX = 'tiv_wooat_HTAccess_';
        /**
         * Anchor we insert above.
         *
         * SiteGuard's lesson: our rules must be evaluated before WordPress's front
         * controller rewrite, so they go above the core block.
         *
         * @since 2.0.0
         * @var string
         */
        public const WP_ANCHOR = '# BEGIN WordPress';
        /**
         * Notice written inside every generated block.
         *
         * @since 2.0.0
         * @var string
         */
        protected const GENERATED_NOTICE = 'Written by TIV Admin Tools from your WordPress settings. Edits here are replaced the next time those settings are saved.';
        /**
         * Name of the block that carries the recovery instructions.
         *
         * Reads as "# BEGIN tiv_wooat_HTAccess_ReadMeFirst" in the file, which is the
         * point: somebody scanning a broken .htaccess in a control panel should not
         * have to wonder which of our sections is the one worth reading.
         *
         * @since 2.0.0
         * @var string
         */
        protected const RECOVERY_BLOCK = 'ReadMeFirst';
        /**
         * Absolute path to the file.
         *
         * @since 2.0.0
         * @var string
         */
        protected $file;
        /**
         * Last error message, empty when fine.
         *
         * @since 2.0.0
         * @var string
         */
        protected $error = '';
        /**
         * Constructor.
         *
         * Does not throw. The previous implementation threw from its constructor and
         * the only caller swallowed it, so a non-writable file produced "Your settings
         * have been saved" and no file change at all.
         *
         * @since 2.0.0
         *
         * @param string $file Optional path override, for tests.
         */
        public function __construct(string $file = '')
        {
        }
        /**
         * Path being managed.
         *
         * @since 2.0.0
         * @return string
         */
        public function get_file(): string
        {
        }
        /**
         * Last error.
         *
         * @since 2.0.0
         * @return string
         */
        public function get_notice(): string
        {
        }
        /**
         * Something worth telling the admin that is NOT a failure.
         *
         * @since 2.0.0
         * @var string
         */
        protected $notice = '';
        /**
         * Getter.
         *
         * @since 2.0.0
         * @return string
         */
        public function get_error(): string
        {
        }
        /**
         * Can we write?
         *
         * Sets the error message as a side effect so the caller can show it.
         *
         * @since 2.0.0
         * @return bool
         */
        public function is_writable(): bool
        {
        }
        /**
         * Turn a reason code into something an admin can act on.
         *
         * @since 2.0.0
         *
         * @param string $reason Code from {@see FS::writable_reason()} or
         *                       {@see FS::replace_atomic()}.
         *
         * @return string
         */
        protected function explain(string $reason): string
        {
        }
        /**
         * Read the file.
         *
         * @since 2.0.0
         * @return string Empty string when unreadable.
         */
        public function read(): string
        {
        }
        /**
         * Normalize line endings and strip a UTF-8 BOM.
         *
         * A BOM or stray CRLF breaks marker matching, which silently turns every write
         * into an append.
         *
         * @since 2.0.0
         *
         * @param string $contents File contents.
         *
         * @return string
         */
        public static function normalize(string $contents): string
        {
        }
        /**
         * Full marker name for a block.
         *
         * @since 2.0.0
         *
         * @param string $name Block name, with or without the prefix.
         *
         * @return string
         */
        public static function marker(string $name): string
        {
        }
        /**
         * Remove one marker block from a string.
         *
         * Non-greedy, so two blocks sharing a marker cannot swallow what lies between.
         *
         * @since 2.0.0
         *
         * @param string $contents File contents.
         * @param string $marker   Full marker name.
         *
         * @return string
         */
        protected static function strip_marker(string $contents, string $marker): string
        {
        }
        /**
         * Every marker name present in a string that carries our prefix.
         *
         * @since 2.0.0
         *
         * @param string $contents File contents.
         *
         * @return string[]
         */
        public static function markers_in(string $contents): array
        {
        }
        /**
         * Markers this plugin currently owns in the file on disk.
         *
         * @since 2.0.0
         * @return string[]
         */
        public function find_our_markers(): array
        {
        }
        /**
         * The instructions somebody reads when WordPress is not available.
         *
         * THIS IS THE ONLY SURFACE LEFT when a bad rule takes the site down. Every other
         * recovery aid this plugin has - the notice above the settings, the automatic
         * rollback, the status report - lives inside wp-admin, and wp-admin is exactly
         * what is unreachable. The person who can still act is looking at this file in
         * a control panel or over ssh, so the instructions have to be in it.
         *
         * It replaced a single line that said "Do not edit between the markers". True on
         * an ordinary day, and the worst possible sentence on a bad one: it tells the
         * one person who can fix the site to keep their hands off the only thing that
         * will fix it. A cautious admin reads that and calls their host, which is how a
         * ten-second delete becomes an afternoon and a one-star review.
         *
         * Deliberately NOT translated, like every other comment we generate. The reader
         * may be a hosting technician who never saw the WordPress admin, let alone its
         * language setting.
         *
         * THE MARKERS BELOW ARE QUOTED WITHOUT THEIR LEADING "# ", AND THAT IS LOAD
         * BEARING. Core finds its own block with str_contains( $line, '# BEGIN WordPress' )
         * in insert_with_markers() - a substring test, not a line match - and every line
         * here already starts with "# ". Writing the marker in full therefore produced a
         * line that core mistook for its own opening marker, 49 lines above the real one.
         *
         * Measured 2026-09-09 on a copy of a real file: one save of Settings > Permalinks
         * took it from 66 lines to 29, deleting the DenyFileExtensions and PHPSettings
         * blocks outright and leaving THIS block unterminated, truncated at the very
         * sentence that was about to warn against deleting the WordPress section. Apache
         * accepts the result - what remains is all comments - so there is no error to
         * notice: the settings screens go on showing every box ticked while the server
         * enforces none of it. The next save cannot repair it either, because a BEGIN with
         * no END is invisible to strip_marker(), so a second copy is prepended instead.
         *
         * The trigger is ordinary: a hard flush_rewrite_rules() - any plugin activating or
         * deactivating - a Permalinks save, or a core update.
         *
         * So: no line this method emits may contain the substring "# BEGIN " or "# END ".
         * Nothing is lost by it. The reader sees "# BEGIN tiv_wooat_HTAccess_ReadMeFirst"
         * on their screen and "BEGIN tiv_wooat_HTAccess_ReadMeFirst" in the sentence, and
         * no one has ever failed to match those two up.
         *
         * @since 2.0.0
         * @return string
         */
        protected static function recovery_text(): string
        {
        }
        /**
         * How to remove our rules by hand, in one sentence, for an error message.
         *
         * Kept in one place because it is said in three, and it was WRONG in all of
         * them until 2026-09-08: "delete the section that begins with
         * # BEGIN tiv_wooat_HTAccess_" names a PREFIX shared by every block we write, so
         * "the section" is a dozen of them; it never mentioned the # END line, so the
         * cut had no stated end; and it said nothing about the "# BEGIN WordPress"
         * block directly below ours, which is what an admin deleting by eye takes out
         * too, breaking every permalink on the site.
         *
         * @since 2.0.0
         * @return string
         */
        public static function manual_removal_instruction(): string
        {
        }
        /**
         * Render one marker block.
         *
         * THE "WRITTEN BY" LINE APPEARS ONCE, in the recovery block at the top, not in
         * every block. It used to be repeated in all of them: with everything switched
         * on that was 21 identical lines in one file, saying something the recovery
         * block already says better and first. Measured 2026-09-10 - the generated file
         * was 415 lines, of which 172 were explanation and 21 were that one sentence.
         *
         * Nothing is lost by saying it once. A reader who has scrolled past the top of
         * the file is looking for a rule, not for provenance, and the marker name on the
         * line above already carries our prefix.
         *
         * @since 2.0.0
         * @since 2.0.0 The notice is emitted only for the recovery block.
         *
         * @param string $marker  Full marker name.
         * @param string $content Block body.
         *
         * @return string
         */
        protected static function render_block(string $marker, string $content): string
        {
        }
        /**
         * Strip everything this plugin owns, leaving only foreign content.
         *
         * @since 2.0.0
         *
         * @param string $contents File contents.
         *
         * @return string
         */
        public static function foreign_content(string $contents): string
        {
        }
        /**
         * Build what the file WOULD look like, without writing it.
         *
         * Shared by write() and by the settings-page preview, so the preview cannot
         * drift from what actually gets written.
         *
         * @since 2.0.0
         *
         * @param string                     $current Current file contents.
         * @param array<string, string|null> $blocks  Block name => body, or null to remove.
         * @param string[]|null              $owned   Markers the current code can generate.
         *                                            Null asks {@see Registry}. Pass an
         *                                            explicit list only in tests.
         *
         * @return string
         */
        public static function build(string $current, array $blocks, ?array $owned = null): string
        {
        }
        /**
         * Put the recovery note above the first block of ours in the file.
         *
         * WHY IT CANNOT RIDE WITH THE INSERTION. Each module writes on its own hook, so
         * build() runs once per module with only that module's blocks, and every run
         * inserts them immediately above "# BEGIN WordPress". The module that saved most
         * recently therefore ends up LOWEST, and a note attached to the insertion lands
         * wherever that module happened to be.
         *
         * Measured on a real file 2026-09-09: DenyFileExtensions at line 4, the note at
         * line 22, PHPSettings at 39. An admin following the note - "delete everything
         * from this line down to the last # END" - would have deleted lines 22 to 51 and
         * LEFT THE HARDENING BLOCK IN PLACE. If that block was what locked them out,
         * they would follow our instructions exactly and stay locked out. The one piece
         * of writing that has to be right when everything else has failed.
         *
         * Anchoring it to the first marker instead makes the sentence true again, and it
         * stays true whichever module saves next, because the note is stripped and
         * re-placed on every write.
         *
         * @since 2.0.0
         *
         * @param string $contents File contents, our blocks already in place.
         *
         * @return string Unchanged when we have written nothing to this file.
         */
        protected static function place_recovery(string $contents): string
        {
        }
        /**
         * Remove blocks carrying our prefix that the current code cannot generate.
         *
         * These are leftovers from an older release - a block that was renamed, split,
         * or folded into another one. Nothing else removes them: a save strips only the
         * markers it is handed, and the settings screen cannot offer to turn off a block
         * it no longer knows about. Without this they survive indefinitely and Apache
         * keeps applying them.
         *
         * Fails SAFE. An empty owned-set means the module classes could not be
         * enumerated, and sweeping on that basis would delete every block we have. In
         * that case nothing is swept: a stale block left behind is recoverable, a
         * wrongly deleted one is not.
         *
         * @since 2.0.0
         *
         * @param string        $contents File contents.
         * @param string[]|null $owned    Markers the current code can generate.
         *
         * @return string
         */
        protected static function sweep_orphans(string $contents, ?array $owned): string
        {
        }
        /**
         * Collapse runs of blank lines and guarantee a single trailing newline.
         *
         * @since 2.0.0
         *
         * @param string $contents File contents.
         *
         * @return string
         */
        protected static function tidy(string $contents): string
        {
        }
        /**
         * True when a string holds no directive outside our own blocks.
         *
         * @since 2.0.0
         *
         * @param string $contents File contents.
         *
         * @return bool
         */
        protected static function has_no_foreign_directives(string $contents): bool
        {
        }
        /**
         * Refuse a candidate that would damage the site.
         *
         * @since 2.0.0
         *
         * @param string $current   Current contents.
         * @param string $candidate Candidate contents.
         *
         * @return string Empty when acceptable, otherwise the reason.
         */
        protected static function rejection_reason(string $current, string $candidate): string
        {
        }
        /**
         * Path of the advisory lock file.
         *
         * Deliberately NOT the .htaccess itself: on Windows a rename over an open file
         * fails, so the target must not be held open across the swap. The lock lives in
         * the plugin's uploads folder - which IS inside the document root on almost
         * every site. It is kept from the web by the deny-all .htaccess written into
         * that folder, not by its location. An empty lock file reveals nothing anyway;
         * the settings backups beside it are what that .htaccess is for.
         *
         * @since 2.0.0
         * @return string Empty when no lock file can be used.
         */
        protected function lock_file(): string
        {
        }
        /**
         * Replace the file, reporting why if it could not be done.
         *
         * @since 2.0.0
         *
         * @param string $contents New contents.
         *
         * @return bool
         */
        protected function replace_atomically(string $contents): bool
        {
        }
        /**
         * Ask the site whether it still works, and undo the write if it does not.
         *
         * The write path is already atomic and already refuses three catastrophic
         * shapes (an empty file, losing the WordPress block, losing every foreign
         * directive). What none of that can check is whether Apache will ACCEPT what we
         * wrote - and a rejected .htaccess is a 500 for the whole site, at which point
         * PHP never runs again and no amount of in-WordPress recovery is possible.
         *
         * So the check has to happen here, in the same request, while the previous
         * contents are still in memory.
         *
         * Loopback is the right probe for THIS job even though it is useless for
         * checking whether a rule works: our rules deliberately exempt loopback, but a
         * configuration Apache refuses to parse fails for everybody, loopback included.
         *
         * Two outcomes are deliberately NOT a rollback:
         *
         * - A transport error. Plenty of hosts refuse loopback requests entirely, and
         *   undoing a perfectly good save because we could not reach ourselves would be
         *   worse than the problem. Reported as "could not verify".
         * - Any status other than 500. A 401, 403 or 503 is a password prompt, a
         *   firewall or maintenance mode, none of which we caused.
         *
         * @since 2.0.0
         *
         * @param string $previous The contents to restore if the site is broken.
         *
         * @return bool True if the site answered, or could not be checked.
         */
        protected function verify_or_rollback(string $previous): bool
        {
        }
        /**
         * Write the given blocks.
         *
         * One lock, one read, one rename. Returns false and sets get_error() on any
         * refusal - callers must surface it rather than logging and reporting success.
         *
         * @since 2.0.0
         *
         * @param array<string, string|null> $blocks Block name => body, or null to remove.
         *
         * @return bool
         */
        public function write(array $blocks): bool
        {
        }
        /**
         * Remove every block this plugin owns.
         *
         * Called on deactivation. Without it a bad gate keeps returning 404 for
         * /wp-admin/ after the plugin is gone, and the admin cannot reach wp-admin to
         * undo it.
         *
         * @since 2.0.0
         * @return bool
         */
        public function remove_all(): bool
        {
        }
    }
}
namespace TIV_WOOAT {
    /**
     * Class Log
     *
     * @since 1.0.0
     */
    class Log extends \TIV_WOOAT\Dependencies\TIVWP\Logger\Log
    {
        /**
         * Log source.
         *
         * @since 1.0.0
         * @return string
         */
        protected static function source(): string
        {
        }
        /**
         * Override threshold.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function threshold(): string
        {
        }
        /**
         * Adds an error level message.
         *
         * The base logger writes through wc_get_logger() and reads its levels from
         * WC_Log_Levels, so without WooCommerce it would fatal - on the very path that
         * reports a failed .htaccess write. Errors go to the PHP error log instead. There
         * is no threshold to honour: the log level is a WooCommerce-only setting.
         *
         * Overridden here, not in log(): the base error() calls self::log(), which
         * never reaches an override.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function error($message, array $context = array())
        {
        }
        /**
         * Adds an info level message. Dropped without WooCommerce, see error().
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function info($message, array $context = array())
        {
        }
        /**
         * Adds a debug level message. Dropped without WooCommerce, see error().
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function debug($message, array $context = array())
        {
        }
    }
}
namespace TIV_WOOAT\Modules {
    /**
     * Class AbstractModule
     *
     * @since 1.0.0
     */
    abstract class AbstractModule extends \TIV_WOOAT\Abstracts\Hookable
    {
        /**
         * Setting type.
         *
         * @since 1.0.0
         * @var string
         */
        public const SETTING_TYPE_CHECKBOX = 'checkbox';
        /**
         * Setting type.
         *
         * @since 1.0.0
         * @var string
         */
        protected const SETTING_TYPE_TEXT = 'text';
        /**
         * Setting type.
         *
         * @since 1.0.0
         * @var string
         */
        protected const SETTING_TYPE_TEXTAREA = 'textarea';
        /**
         * Setting type.
         *
         * @since 1.0.0
         * @var string
         */
        protected const SETTING_TYPE_NUMBER = 'number';
        /**
         * Setting type.
         *
         * @since 1.0.0
         * @var string
         */
        public const SETTING_TYPE_EMAIL = 'email';
        /**
         * Setting type.
         *
         * @since 1.0.0
         * @var string
         */
        protected const SETTING_TYPE_SELECT = 'select';
        /**
         * Setting type.
         *
         * @since 1.0.0
         * @var string
         */
        protected const SETTING_TYPE_MULTISELECT = 'multiselect';
        /**
         * Setting type.
         *
         * @since 1.0.0
         * @var string
         */
        protected const SETTING_TYPE_SINGLE_SELECT_COUNTRY = 'single_select_country';
        /**
         * Pseudo setting type: a heading that splits a long sub-tab into groups.
         *
         * Not a stored setting. {@see AbstractModuleHTAccess::get_multi_setting_fields()}
         * expands it into a WooCommerce sectionend + title pair.
         *
         * @since 2.0.0
         * @var string
         */
        public const SETTING_TYPE_GROUP = 'tiv_group';
        /**
         * Default CSS classes for each setting type.
         *
         * @since 1.3.0
         * @var string[]
         */
        protected const CSS_CLASS = array(self::SETTING_TYPE_CHECKBOX => 'checkbox', self::SETTING_TYPE_TEXT => 'input-text regular-input', self::SETTING_TYPE_NUMBER => 'input-text regular-input', self::SETTING_TYPE_SELECT => 'wc-enhanced-select', self::SETTING_TYPE_MULTISELECT => 'wc-enhanced-select', self::SETTING_TYPE_SINGLE_SELECT_COUNTRY => 'wc-enhanced-select', self::SETTING_TYPE_TEXTAREA => 'input-text');
        /**
         * Module ID.
         * Default: remove namespace from the class name and then replace backslashes with underscores.
         *
         * @since 1.0.0
         *
         * @return string
         * @noinspection CascadeStringReplacementInspection
         */
        protected static function get_id()
        {
        }
        /**
         * Setting ID.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_id()
        {
        }
        /**
         * Is this option key one this module still answers for?
         *
         * Asked when restoring a backup, to tell a key that is still live from one left
         * behind by a module that has since been renamed or folded into another. The
         * module itself is the only thing that can answer: an option key is built from
         * the class name, so the class is where the naming rule lives.
         *
         * @since 2.0.0
         *
         * @param string $option_key Full option name, prefix included.
         *
         * @return bool
         */
        public static function owns_option(string $option_key): bool
        {
        }
        /**
         * Is this a credential rather than a preference?
         *
         * A module that says yes is never written to a settings backup. Those files live
         * under uploads, which the webserver serves like any other folder, so a password
         * in one is a password anybody can download. Restoring an older file that still
         * contains one is allowed - putting a secret back into the database is not the
         * problem, leaving a copy of it in the webroot is.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function is_secret(): bool
        {
        }
        /**
         * Is THIS key a credential?
         *
         * A one-option module answers for its whole self, so the two questions are the
         * same here and this just forwards. They stop being the same the moment a
         * module holds many options: see
         * {@see AbstractModuleHTAccess::is_secret_option()}, which is where the
         * distinction had to be made.
         *
         * @since 2.0.0
         *
         * @param string $option_key Full option name, prefix included.
         *
         * @return bool
         */
        public static function is_secret_option(string $option_key): bool
        {
        }
        /**
         * Get option helper.
         *
         * @since 1.0.0
         *
         * @param mixed $default_value Optional. Default value to return if the option does not exist.
         *
         * @return string|bool|mixed
         */
        protected static function my_value_get($default_value = false)
        {
        }
        /**
         * Delete option helper.
         *
         * @since 1.0.0
         *
         * @return bool
         */
        protected static function my_value_delete()
        {
        }
        /**
         * Get-and-Delete option helper.
         *
         * @since 1.0.0
         *
         * @param mixed $default_value Optional. Default value to return if the option does not exist.
         *
         * @return bool|mixed
         */
        protected static function my_value_get_and_delete($default_value = false)
        {
        }
        /**
         * Setting type: text, checkbox, etc.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_type()
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since        1.0.0
         *
         * @return string|string[]
         * @noinspection PhpReturnDocTypeMismatchInspection
         */
        protected static function setting_description()
        {
        }
        /**
         * Setting comment.
         *
         * @since        1.0.0
         *
         * @return string|string[]
         * @noinspection PhpReturnDocTypeMismatchInspection
         */
        protected static function setting_comment()
        {
        }
        /**
         * Convert array to <br>-separated lines.
         *
         * @since 1.3.0
         * @since 2.0.0 One implementation, in {@see Prose::to_multiline()}. Sections
         *              format their own copy the same way and cannot reach a protected
         *              method on a module.
         *
         * @param string|string[] $sz String or array of strings.
         *
         * @return string
         */
        protected static function to_multiline($sz)
        {
        }
        /**
         * Format setting_description.
         *
         * @since 1.0.0
         * @return string
         */
        protected static function get_setting_description_formatted()
        {
        }
        /**
         * Default value for the setting.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_default()
        {
        }
        /**
         * CSS class.
         *
         * @since 1.0.0
         * @since 1.3.0 Use CSS_CLASS
         *
         * @return string
         */
        protected static function setting_css_class()
        {
        }
        /**
         * Method setting_row_class.
         *
         * @since 1.7.0
         * @return string
         */
        protected static function setting_row_class(): string
        {
        }
        /**
         * CSS style.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_css_style()
        {
        }
        /**
         * Default value for the 'desc_tip' setting parameter.
         *
         * @since        1.0.0
         *
         * @return false|bool|string
         * @noinspection PhpReturnDocTypeMismatchInspection
         */
        protected static function setting_desc_tip()
        {
        }
        /**
         * Default value for the 'custom_attributes' setting parameter.
         *
         * @since 1.0.0
         * @return array
         */
        protected static function setting_custom_attributes()
        {
        }
        /**
         * Default value for the select options.
         *
         * @since 1.0.0
         * @return array
         */
        protected static function setting_select_options()
        {
        }
        /**
         * Render textarea input setting array for {@see AbstractSection::add_fields}.
         *
         * @since 1.0.0
         *
         * @return array
         */
        protected static function setting_common_attributes()
        {
        }
        /**
         * Something outside this plugin already decides this setting.
         *
         * Empty for almost every module, and that is the point: this answers "can our
         * control do anything at all here?", not "is there something to warn about".
         * A module answers ONLY when the answer is no - typically a constant defined in
         * wp-config.php, which our own code deliberately yields to.
         *
         * IT REPORTS THE VALUE, NOT JUST A MESSAGE, and that is the whole design. The
         * first version only greyed the control out, which fixed nothing: a locked
         * checkbox still draws itself from the stored option, so a site whose
         * wp-config keeps the file editors OPEN would show a greyed-out TICKED box
         * beside a notice saying they are open. Still the wrong state, now unfixable.
         * The control shows what is REALLY true and says who decided it.
         *
         * Nothing is written. The admin's own preference stays in the options table,
         * dormant, and takes effect again the day that constant goes away - so the
         * message says so whenever the two disagree.
         *
         * WHY THIS OVERRIDES "advise, never decide". That principle governs settings
         * where the owner's judgement is what is being second-guessed. It does not
         * cover a switch that is inert: showing a state that does not exist is not
         * respecting anyone's judgement. Where our control CAN take effect - the
         * revisions limit beats WP_POST_REVISIONS, and core's own docblock says so - it
         * stays usable and warns instead.
         *
         * @since 2.0.0
         *
         * @return array{value: string, message: string}|array Empty when this plugin
         *               is the one in charge.
         */
        protected static function setting_conflict(): array
        {
        }
        /**
         * Get setting fields.
         *
         * @since 1.0.0
         * @since 2.0.0 Shows the truth, and locks the control, when something else decides.
         *
         * @return array
         */
        public static function get_setting_fields()
        {
        }
        /**
         * "Your own setting is remembered", when it differs from what is in force.
         *
         * Only said when the two actually disagree. On a site where the constant and
         * the stored preference happen to match, there is nothing dormant to explain
         * and the sentence would be noise.
         *
         * @since 2.0.0
         *
         * @param string $in_force The value the environment imposes.
         *
         * @return string Empty when there is nothing to say.
         */
        protected static function dormant_preference_note(string $in_force): string
        {
        }
        /**
         * Shortcut to {@see SettingsController::is_set()}.
         *
         * @since 1.0.0
         * @return bool
         */
        public static function my_value_is_set()
        {
        }
        /**
         * Does this module only make sense with WooCommerce?
         *
         * Such a module is skipped entirely on a site without WooCommerce - its hooks,
         * and its setting in WP-CLI - the same way the Subscriptions sub-tab is left out
         * when Subscriptions is absent.
         *
         * @since 2.1.0
         * @return bool
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Is the "setting" really a one-shot action that saving the screen triggers?
         *
         * Such a module is never offered by WP-CLI as a setting: storing its option
         * would run the action on some later page load, unasked.
         *
         * @since 2.1.0
         * @return bool
         */
        public static function is_action(): bool
        {
        }
        /**
         * True if module needs to be active regardless of option value.
         *
         * @since 1.0.0
         * @return false|bool
         */
        public static function always_setup_hooks()
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        abstract protected function module_hooks();
    }
    /**
     * Class AbstractModuleCheckbox
     *
     * @since 1.0.0
     */
    abstract class AbstractModuleCheckbox extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Override setting_type.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_type()
        {
        }
        /**
         * Default value for the checkbox setting.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_default()
        {
        }
        /**
         * Read the checkbox as a real boolean.
         *
         * WHY THE BASE IMPLEMENTATION IS DANGEROUS HERE. WooCommerce stores a checkbox
         * as the strings 'yes' and 'no', and {@see AbstractModule::my_value_get()}
         * returns what is stored. 'no' is a non-empty string, so it is TRUE in a
         * boolean context - which means an unticked box and a ticked box are
         * indistinguishable to `if ( ... )` and `(bool) ...`.
         *
         * That is not theoretical. Reported 2026-08-04 from production and reproduced
         * here: with "Enable SMTP?" unticked and saved, EmailHooks ran
         * $phpmailer->isSMTP() anyway, and `(bool) 'no'` also left TLS peer
         * verification on. The certificate did not match, stream_socket_enable_crypto()
         * failed, and every wp_mail() on the site returned false - password resets,
         * order emails, everything, silently. A sibling site that had never SAVED the
         * setting was fine, because an absent option returns the false default: the bug
         * arrived the moment somebody unticked a box and pressed Save.
         *
         * FIXED HERE RATHER THAN AT THE CALL SITES, deliberately. Correcting the two
         * callers would leave the trap loaded for the next one, and the trap is
         * invisible - the wrong code reads exactly like the right code. For a checkbox
         * the value IS on or off; 'yes'/'no' is WooCommerce's storage detail, not
         * something a caller should have to know.
         *
         * Safe to narrow: this method is protected, so nothing outside the plugin can
         * call it, and every in-plugin caller was checked - only EmailHooks reads a
         * checkbox this way, and it wants a boolean.
         *
         * @since 2.0.0
         *
         * @param mixed $default_value Value when the option has never been saved.
         *
         * @return bool
         */
        protected static function my_value_get($default_value = false)
        {
        }
    }
    /**
     * Class AbstractModuleEmail
     *
     * @since 1.0.0
     */
    abstract class AbstractModuleEmail extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Override setting_type.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_type()
        {
        }
        /**
         * Override setting_css_class().
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_css_class()
        {
        }
        /**
         * Implement module_hooks().
         *
         * @since 1.7.0
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class AbstractModuleHTAccess
     *
     * @since 1.3.0
     */
    abstract class AbstractModuleHTAccess extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Section (sub-tab) where my settings are.
         *
         * @since 1.3.0
         * @return string
         */
        public static function my_section()
        {
        }
        /**
         * Every section (sub-tab) this module renders fields on.
         *
         * A module whose settings are split across tabs overrides this. The FIRST entry
         * is the default home of any option that does not name a section of its own,
         * and must equal {@see AbstractModuleHTAccess::my_section()}.
         *
         * Splitting is only safe because {@see AbstractModuleHTAccess::blocks()} builds
         * from STORED values rather than from $_POST. Reading $_POST would drop every
         * option that happened to be rendered on the OTHER tab, silently deleting half
         * the block on every save.
         *
         * @since 2.0.0
         * @return string[]
         */
        public static function my_sections(): array
        {
        }
        /**
         * Which section an individual option belongs to.
         *
         * @since 2.0.0
         *
         * @param array $option One entry of static::$options.
         *
         * @return string
         */
        protected static function option_section(array $option): string
        {
        }
        /**
         * Var options.
         *
         * @since 1.3.0
         *
         * @var array[]
         */
        protected static $options = array();
        /**
         * Implement module_hooks().
         *
         * @since 1.3.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
        /**
         * Override always_setup_hooks().
         *
         * @since 1.3.0
         * @inheritDoc
         */
        public static function always_setup_hooks()
        {
        }
        /**
         * Method setup_fields.
         *
         * @since 1.3.0
         * @return void
         */
        abstract protected function setup_fields();
        /**
         * Shortcut to {@see SettingsController::make_option_key()}.
         *
         * @since 1.3.0
         *
         * @param string $option_id Name of the option.
         *
         * @return string
         */
        protected static function make_option_key($option_id)
        {
        }
        /**
         * The option definitions, as the settings screen gets them.
         *
         * Filled by setup_fields() on 'init', so empty before that. Includes the group
         * headings, which are not stored settings.
         *
         * @since 2.1.0
         * @return array[] Option id => definition.
         */
        public static function option_definitions(): array
        {
        }
        /**
         * Everything this module's keys begin with.
         *
         * @since 2.0.0
         * @return string
         */
        public static function option_key_prefix(): string
        {
        }
        /**
         * Override owns_option().
         *
         * A multi-option module holds one key per row, so it claims a prefix rather than
         * a single name. Deliberately NOT the exact list in {@see static::$options}:
         * that list is empty until setup_fields() has run, and on ApacheHardening it is
         * cut down to the access gate until the owner confirms. Either state would make
         * a restore reject every real hardening key as unknown.
         *
         * @since 2.0.0
         *
         * @param string $option_key Full option name, prefix included.
         *
         * @return bool
         */
        public static function owns_option(string $option_key): bool
        {
        }
        /**
         * Options that are credentials, named one by one.
         *
         * @since 2.0.0
         * @return string[] Option ids, without the prefix.
         */
        public static function secret_options(): array
        {
        }
        /**
         * Is THIS key a credential?
         *
         * WHY THE PER-MODULE ANSWER WAS NOT ENOUGH. {@see AbstractModule::is_secret()}
         * is declared by a whole class, which works for SMTP_Password because that
         * module IS one password. ApacheHardening is one module holding 36 options, one
         * of which is the secret login slug - the address that exists precisely so that
         * nobody else knows it - and a class-level answer can only say "all of them" or
         * "none of them". It said none.
         *
         * Found 2026-09-08: the slug was going into settings backup files, which are
         * written under uploads and meant to be harmless if a stranger downloads one,
         * and into the WooCommerce status report, which is pasted into support tickets.
         *
         * @since 2.0.0
         *
         * @param string $option_key Full option name, prefix included.
         *
         * @return bool
         */
        public static function is_secret_option(string $option_key): bool
        {
        }
        /**
         * Multiple get_setting_fields().
         *
         * @since 1.3.0
         * @return array[]
         */
        public static function get_multi_setting_fields(string $section = '')
        {
        }
        /**
         * Name the .htaccess block this setting writes, when it is actually written.
         *
         * WHY THIS IS IN THE UI AT ALL. It answers the one question the rest of the
         * plugin cannot: an owner locked out by a rule reads block names out of
         * .htaccess in a control panel, deletes our section to get back in, and returns
         * to a settings screen where every box is still ticked exactly as before. The
         * file told them "tiv_wooat_HTAccess_NoPhantomWpPaths"; without this line,
         * nothing on this page connects that string to a switch.
         *
         * WHY THE ID AND NOT THE TITLE, which reads better. It had to survive
         * translation. Titles are translated and the file deliberately is not - see
         * {@see \TIV_WOOAT\HTAccess\Writer::recovery_text()}, "the reader may be a
         * hosting technician who never saw the WordPress admin, let alone its language
         * setting". Putting titles in the file would either write the saving admin's
         * locale into it, or print English that matches nothing in a translated screen.
         * The marker is the only string that is identical in both places in every
         * language, so it is the one that can join them.
         *
         * DERIVED, NEVER TYPED. It goes through Writer::marker(), so it cannot drift
         * from what is actually in the file - which is the entire value of the line.
         *
         * ONLY WHEN THE SETTING IS ON, because only then is there a block to name.
         * Printing it on an unticked row states something untrue, and would put a line
         * of machine text under every setting on the tab for no reason.
         *
         * DECLARED RATHER THAN INFERRED. Twelve of the twenty block names are the
         * option id in PascalCase and could be derived, but four blocks - SecurityHeaders,
         * BlockBadBots, BlockDangerousEndpoints and ApacheHardening - are written from
         * several settings at once, because their rules are interdependent and have to
         * share one marker. Those have no single option to be named after, so no rule
         * could infer them, and a mapping that works for most cases is worse than one
         * that is written down.
         *
         * @since 2.0.0
         *
         * @param string $option_id Option id, without the prefix.
         * @param array  $option    Its definition.
         *
         * @return string Empty when this setting writes nothing, or is switched off.
         */
        protected static function block_marker_note(string $option_id, array $option): string
        {
        }
        /**
         * Which .htaccess block each setting contributes to.
         *
         * Option id => block name, as {@see \TIV_WOOAT\HTAccess\Generator::block_order()}
         * names it. Several settings may point at the same block; that is not a mistake,
         * it is what an interdependent rule set looks like from the settings screen.
         *
         * Modules that write no blocks, or want no such note, leave this empty.
         *
         * @since 2.0.0
         * @return array<string, string>
         */
        protected static function option_blocks(): array
        {
        }
        /**
         * Method sanitize_posted_value.
         *
         * @since 1.3.0
         *
         * @param string|string[] $posted_value Value from $_POST.
         * @param string          $option_id    Option ID.
         *
         * @return bool
         */
        protected function sanitize_posted_value($posted_value, $option_id)
        {
        }
        /**
         * Make sure the array has only strings, make it unique and sorted.
         *
         * @since 1.0.0
         *
         * @param string[] $array_of_strings Array to sanitize.
         *
         * @return array
         */
        protected static function sanitize_array_of_strings($array_of_strings)
        {
        }
        /**
         * Method make_insertion().
         *
         * @since 1.3.0
         *
         * @param string[] $option_values Array of posted option values.
         *
         * @return string|string[] Text or array of strings to insert between markers.
         */
        abstract protected function make_insertion($option_values);
        /**
         * Every marker name this module can generate.
         *
         * NAMES only, never bodies, and deliberately independent of any setting: a
         * marker the module can generate is "ours" whether it is currently switched on
         * or off. An owned marker that is off is removed by {@see blocks()} returning
         * null for it; this list is what stops the orphan sweep in
         * {@see Writer::build} deleting a block that belongs to a
         * module other than the one being saved.
         *
         * Override when a module owns more than one marker.
         *
         * @since 2.0.0
         * @return string[]
         */
        public static function owned_markers(): array
        {
        }
        /**
         * The blocks this module owns.
         *
         * Marker name => body, or null to remove that marker. The default keeps the
         * historic behaviour of one marker per module, built from the posted values, so
         * modules that have not been converted are unaffected.
         *
         * A module may return many markers. The whole set is written in ONE atomic
         * operation, so ordering within the file is decided by this array and a
         * concurrent save cannot interleave.
         *
         * Built from STORED options, not from $_POST. WooCommerce writes the fields
         * before firing our save hook, so during a save the two are identical - but the
         * stored values are also complete, and $_POST is not:
         *
         * - A module split across two tabs (see my_sections()) only ever receives half
         *   its fields in any one POST. Reading $_POST would silently drop the other
         *   half from the generated block on every save.
         * - Reading storage means the block can also be rebuilt with nothing posted at
         *   all, which is what makes this usable from WP-CLI or an activation hook.
         *
         * {@see \TIV_WOOAT\Modules\HTAccess\ApacheHardening::blocks()} has always worked
         * this way; this brings the default in line with it.
         *
         * @since 2.0.0
         * @since 2.0.0 Reads stored options instead of $_POST.
         * @return array<string, string|null>
         */
        public function blocks(): array
        {
        }
        /**
         * Write this module's blocks to .htaccess.
         *
         * Failure is surfaced, not swallowed. The previous implementation caught
         * everything and only wrote to the log, so a read-only .htaccess produced
         * "Your settings have been saved" and no file change whatsoever.
         *
         * @since        1.3.0
         *
         * @return void
         */
        public function action__write_block_to_htaccess()
        {
        }
        /**
         * Show a write failure to the admin.
         *
         * @since 2.0.0
         *
         * @param string $message Reason.
         *
         * @return void
         */
        protected static function report_failure(string $message): void
        {
        }
    }
    /**
     * Class AbstractModuleMultiSelect
     *
     * @since 1.0.0
     */
    abstract class AbstractModuleMultiSelect extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Override setting_type.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_type()
        {
        }
        /**
         * Override setting_css_class().
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_css_class()
        {
        }
    }
    /**
     * Class AbstractModuleNumber
     *
     * @since 1.0.0
     */
    abstract class AbstractModuleNumber extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Override setting_type.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_type()
        {
        }
        /**
         * Override setting_css_class().
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_css_class()
        {
        }
    }
    /**
     * Class AbstractModuleSelect
     *
     * @since 1.0.0
     */
    abstract class AbstractModuleSelect extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Override setting_type.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_type()
        {
        }
        /**
         * Override setting_css_class().
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_css_class()
        {
        }
    }
    /**
     * Class AbstractModuleSingleSelectCountry
     *
     * @since 1.0.0
     */
    abstract class AbstractModuleSingleSelectCountry extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Override setting_type.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_type()
        {
        }
        /**
         * Override setting_css_class().
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_css_class()
        {
        }
    }
    /**
     * Class AbstractModuleText
     *
     * @since 1.0.0
     */
    abstract class AbstractModuleText extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Override setting_type.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_type()
        {
        }
    }
    /**
     * Class AbstractModuleTextArea
     *
     * @since 1.0.0
     */
    abstract class AbstractModuleTextArea extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Override setting_type.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_type()
        {
        }
        /**
         * Override setting_css_class().
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_css_class()
        {
        }
        /**
         * Override CSS.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_css_style()
        {
        }
    }
}
namespace TIV_WOOAT\Modules\Development {
    /**
     * Class DataInspector
     *
     * @since 1.0.0
     */
    class DataInspector extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * Built on the WooCommerce order and product APIs.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Setting comment.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
        /**
         * Add the meta box to view metas if the user has permissions to.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function action__add_meta_boxes()
        {
        }
        /**
         * Output metadata in a table.
         *
         * @since 1.0.0
         *
         * @param array  $data  Array of string => mixed.
         * @param string $title Optional title.
         *
         * @return void
         */
        protected function output(array $data, $title = '')
        {
        }
        /**
         * Print CSS.
         *
         * @since 1.0.0
         * @return void
         */
        protected function print_css()
        {
        }
        /**
         * Method metabox_content.
         *
         * @since 1.0.0
         * @return void
         */
        public function metabox_content(): void
        {
        }
    }
    /**
     * Class DisableCron
     *
     * @since 1.0.0
     */
    class DisableCron extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * The constant this module sets.
         *
         * @since 2.0.0
         * @var string
         */
        protected const CONSTANT = 'DISABLE_WP_CRON';
        /**
         * True when WE were the one that defined it.
         *
         * @since 2.0.0
         * @var bool
         */
        protected static $defined_here = false;
        /**
         * Is something else already deciding this?
         *
         * Same shape as {@see \TIV_WOOAT\Modules\Security\DisableFileEdit::setting_conflict()},
         * and safe for the same reason: WordPress does not define this constant itself,
         * so "defined, and not by us" means somebody put it in wp-config.php.
         *
         * A site with a real system cron is the common case, and it is exactly the site
         * where a plugin quietly claiming to control this would be misleading.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        protected static function setting_conflict(): array
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.1.0-6
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Implement module_hooks()
         *
         * @since        1.0.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class DisableHeartbeats
     *
     * @since 1.0.0
     */
    class DisableHeartbeats extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.1.0-5
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class DisableWCAnalyticsCache
     *
     * @since 1.0.0
     */
    class DisableWCAnalyticsCache extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * A WooCommerce Analytics switch.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class EnableFakePayments
     *
     * @since 1.0.0
     */
    class EnableFakePayments extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * A WooCommerce payment gateway.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.1.0-6
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
        /**
         * Registers WooCommerce Blocks integration.
         *
         */
        public static function action__woocommerce_blocks_loaded()
        {
        }
    }
    /**
     * Class ShowFieldIDs
     *
     * @since 1.0.0
     */
    class ShowFieldIDs extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.1.0-6
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class ShowProtectedMetas
     *
     * @since 1.0.0
     */
    class ShowProtectedMetas extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.1.0-6
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Dummy Payments Blocks integration
     *
     * @since 1.0.3
     */
    final class WC_Gateway_Fake_Payment_Blocks_Support extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * The gateway instance.
         *
         * @var \TIV_WOOAT_Fake_Payment_Gateway
         */
        private $gateway;
        /**
         * Payment method name/id/slug.
         *
         * @var string
         */
        protected $name = \TIV_WOOAT_Fake_Payment_Gateway::ID;
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
}
namespace TIV_WOOAT\Modules\Email {
    /**
     * Class BCC
     *
     * @since 1.0.0
     */
    class BCC extends \TIV_WOOAT\Modules\AbstractModuleEmail
    {
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
    }
    /**
     * Class EmailHooks
     *
     * @since        1.7.0
     * @noinspection PhpUnused
     */
    class EmailHooks extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Override always_setup_hooks().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        public static function always_setup_hooks()
        {
        }
        /**
         * Implement module_hooks().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class From
     *
     * @since 1.7.0
     */
    class From extends \TIV_WOOAT\Modules\AbstractModuleEmail
    {
        /**
         * Setting title.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.7.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_default().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected static function setting_default()
        {
        }
    }
    /**
     * Class FromName
     *
     * @since 1.7.0
     */
    class FromName extends \TIV_WOOAT\Modules\AbstractModuleText
    {
        /**
         * Setting title.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.7.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_default().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected static function setting_default()
        {
        }
        /**
         * Implement module_hooks().
         *
         * @since 1.7.0
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class Sender
     *
     * @since 1.7.0
     */
    class PHPMailerSender extends \TIV_WOOAT\Modules\AbstractModuleEmail
    {
        /**
         * Setting title.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.7.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Set Sender in PHPMailer for DMARC to work properly.
         * With that setting, "Return-Path:" header set by Postfix matches the "From:".
         * Try WooCommerce setting first.
         * If not - make it from the site URL.
         *
         * @since 1.7.0
         * @return string
         */
        private static function make_sender(): string
        {
        }
        /**
         * Override setting_default().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected static function setting_default()
        {
        }
    }
    /**
     * Class SMTP_Enabled
     *
     * @since 1.7.0
     */
    class SMTP_Enabled extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Setting title.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.7.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Email hooks {@see EmailHooks}.
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class SMTP_Host
     *
     * @since 1.7.0
     */
    class SMTP_Host extends \TIV_WOOAT\Modules\AbstractModuleText
    {
        /**
         * Setting title.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.7.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_default().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected static function setting_default()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Email hooks {@see EmailHooks}.
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class SMTP_Password
     *
     * @since 1.7.0
     */
    class SMTP_Password extends \TIV_WOOAT\Modules\AbstractModuleText
    {
        /**
         * Setting title.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.7.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override is_secret().
         *
         * Keeps the password out of the .json a settings backup writes. That file sits in
         * the uploads folder, which is served to anybody who asks for it.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        public static function is_secret(): bool
        {
        }
        /**
         * Email hooks {@see EmailHooks}.
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class SMTP_SSLVerify
     *
     * @since 1.9.5
     */
    class SMTP_SSLVerify extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Setting title.
         *
         * @since 1.9.5
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.9.5
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.9.5
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Email hooks {@see EmailHooks}.
         *
         * @since 1.9.5
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class SMTP_Username
     *
     * @since 1.7.0
     */
    class SMTP_Username extends \TIV_WOOAT\Modules\AbstractModuleText
    {
        /**
         * Setting title.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.7.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Email hooks {@see EmailHooks}.
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class Tester
     *
     * @since 1.7.0
     */
    class Tester extends \TIV_WOOAT\Modules\AbstractModule
    {
        /**
         * Override requires_woocommerce().
         *
         * A button on the WooCommerce settings screen, which does not exist without it.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Nonce name.
         *
         * @since  1.7.0
         * @var string
         */
        protected const NONCE_NAME = 'wooat_email_tester_nonce_name';
        /**
         * Nonce action.
         *
         * @since  1.7.0
         * @var string
         */
        protected const NONCE_ACTION = 'wooat_email_tester_nonce_action';
        /**
         * AJAX action.
         *
         * @since  1.7.0
         * @var string
         */
        protected const AJAX_ACTION = 'wooat_send_test_email';
        /**
         * Override setting_type.
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected static function setting_type()
        {
        }
        /**
         * Setting title.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Override setting_description().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Override always_setup_hooks().
         *
         * @since 1.7.0
         * @inheritDoc
         */
        public static function always_setup_hooks()
        {
        }
        /*
         * Implement module_hooks().
         *
         * @since 1.7.0
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class To
     *
     * @since 1.0.0
     */
    class To extends \TIV_WOOAT\Modules\AbstractModuleEmail
    {
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
    }
}
namespace TIV_WOOAT\Modules\Frontend {
    /**
     * Class CacheMaxAge
     *
     * @since 1.0.0
     */
    class CacheMaxAge extends \TIV_WOOAT\Modules\AbstractModuleNumber
    {
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.1.0-6
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Override setting_custom_attributes().
         *
         * @inheritdoc
         */
        protected static function setting_custom_attributes()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
}
namespace TIV_WOOAT\Modules\General {
    /**
     * Class LogLevel
     *
     * @since 1.0.0
     */
    class LogLevel extends \TIV_WOOAT\Modules\AbstractModuleSelect
    {
        /**
         * Override requires_woocommerce().
         *
         * The threshold for the WooCommerce logger, which is all this plugin logs through.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Get threshold.
         *
         * @since 1.0.0
         *
         * @param string $default_value Optional default value.
         *
         * @return string
         */
        public static function get_threshold($default_value = \WC_Log_Levels::ERROR)
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Implement setting_select_options() method.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_select_options()
        {
        }
        /**
         * Implement module_hooks() method.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
}
namespace TIV_WOOAT\Modules\Geolocation {
    /**
     * Class OverwriteCountry
     *
     * @note  Just select! Not SelectCountry.
     *
     * @since 1.0.0
     */
    class OverwriteCountry extends \TIV_WOOAT\Modules\AbstractModuleSelect
    {
        /**
         * Override requires_woocommerce().
         *
         * Overrides WooCommerce geolocation.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 2.0.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Override setting_select_options().
         *
         * @inheritDoc
         */
        protected static function setting_select_options()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class OverwriteIP
     *
     * @since 1.0.0
     */
    class OverwriteIP extends \TIV_WOOAT\Modules\AbstractModuleText
    {
        /**
         * Override requires_woocommerce().
         *
         * Overrides WooCommerce geolocation.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 2.0.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Override setting_custom_attributes().
         *
         * @inheritdoc
         */
        protected static function setting_custom_attributes()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
}
namespace TIV_WOOAT\Modules\HTAccess {
    /**
     * Class ApacheHardening
     *
     * Owns every generated block except PHP Settings and ModExpires, which keep their
     * own sub-tabs.
     *
     * One module writes many markers. The alternative - one module per marker - would
     * mean a settings sub-tab per block, which is unusable at a dozen blocks.
     *
     * @since 1.3.0
     */
    class ApacheHardening extends \TIV_WOOAT\Modules\AbstractModuleHTAccess
    {
        /**
         * My section.
         *
         * Moved from its own "Apache Hardening" tab into "Security" in 2.0.0. The tab a
         * module renders on has NO bearing on where its values are stored - option keys
         * are built from the CLASS name, not the section - so this is a pure move.
         *
         * @since 1.3.0
         * @since 2.0.0 Was 'apache_hardening'.
         * @inheritDoc
         */
        public static function my_section()
        {
        }
        /**
         * Override setup_hooks().
         *
         * @since 1.3.0
         * @inheritDoc
         */
        public function setup_hooks()
        {
        }
        /**
         * Refuse a secret address that cannot be written safely.
         *
         * Returns the PREVIOUSLY stored value rather than an empty string, so that a typo
         * does not silently discard a working secret and lock the admin out on the next
         * page load.
         *
         * @since 2.0.0
         *
         * @param mixed $value Value WooCommerce is about to store.
         *
         * @return string
         */
        public function filter__sanitize_secret_login_slug($value): string
        {
        }
        /**
         * Drop PHP file names, which this block must never deny.
         *
         * Removes the offending lines and says which, rather than refusing the whole
         * save: the rest of the box is very likely fine, and rejecting a ten-line list
         * over one line teaches the admin to stop reading the message.
         *
         * The authoritative guard is {@see Generator::is_deniable_name()}, applied inside
         * the generator so it holds whatever route the value arrived by. This half exists
         * so the screen and the file agree - a box still showing index.php after a save,
         * with no such rule in .htaccess, is the divergence this plugin keeps trying to
         * avoid.
         *
         * @since 2.0.0
         *
         * @param mixed $value Value WooCommerce is about to store.
         *
         * @return string
         */
        public function filter__sanitize_deny_files($value): string
        {
        }
        /**
         * Normalise the free-text file endings, and say what was thrown away.
         *
         * Writes the box back as one ".ext" per line, lowercased and de-duplicated, so the
         * admin can see exactly what was accepted. Input is deliberately forgiving - space
         * separated, comma separated, with or without the leading dot, any case - because
         * every one of those shapes is what someone actually types into a box labelled
         * "endings", and the alternative is a value that vanishes without comment.
         *
         * Only the shape is checked. Whether an ending is a GOOD idea to deny is the
         * admin's call, and the field says which two on the list above have a downside.
         *
         * A double ending is the one rejection worth explaining. FilesMatch matches on the
         * text after the LAST dot, so ".tar.gz" can never be an ending - .gz is what
         * catches archive.tar.gz - and someone who types it and is told nothing will
         * reasonably conclude the whole feature is broken.
         *
         * @since 2.0.0
         *
         * @param mixed $value Value WooCommerce is about to store.
         *
         * @return string
         */
        public function filter__sanitize_deny_file_extensions_extra($value): string
        {
        }
        /**
         * Should the secret-login controls be on the screen at all?
         *
         * The flag decides whether the feature is OFFERED, and nothing else. Whether it
         * RUNS is {@see Config::gate_is_active}, which ignores the flag entirely.
         *
         * So the flag is read only to decide whether to make the first offer. Once this
         * site has taken it up - by ticking the box, or by storing an address, or both -
         * the controls stay, flag or no flag. Withdrawing a line from wp-config must never
         * remove the only way to reach something this site already has:
         *
         * - BOX TICKED. The gate may be live, and unticking is the one way off. Hide the
         *   control and the administrator is looking at a hidden login page with no
         *   visible way to unhide it.
         * - ADDRESS STORED, BOX NOT TICKED. Nothing is running, but the secret is in the
         *   database. Hiding the field orphans it: invisible, unremovable, and still
         *   present in every backup taken from then on. That is what the third clause is
         *   for, and it is the half that was missing until 2026-09-11.
         *
         * The finish is therefore untick AND clear the address. Then all three are false
         * and the controls go.
         *
         * @since 2.0.0
         * @return bool
         */
        protected static function gate_ui_visible(): bool
        {
        }
        /**
         * Tell the admin when the gate is switched on but cannot be built.
         *
         * "Your settings have been saved" plus a .htaccess with no gate in it is the
         * worst outcome available: the admin believes the login is hidden, and it is wide
         * open. The field description already carries an advisory, but a line of grey
         * text below the form is not where someone looks after clicking Save.
         *
         * @since 2.0.0
         * @return void
         */
        protected static function warn_if_gate_requested_but_inactive(): void
        {
        }
        /**
         * Default value for a setting, used before anything is ever saved.
         *
         * EVERYTHING IS OFF (user decision, 2026-08-24). Installing this plugin must not
         * change .htaccess by itself: with every value here off or empty the generator
         * produces no blocks, so a fresh install writes nothing until the owner ticks
         * something. Several of these did default to on until that decision; each one is
         * to be reviewed individually before any of them goes back.
         *
         * The curated lists that used to be the defaults stay as
         * {@see Generator::EXTENSIONS_DEFAULT}, {@see Generator::SCAN_TOKENS_DEFAULT} and
         * {@see Generator::USELESS_FILES_DEFAULT}.
         *
         * Only SCAN_TOKENS_DEFAULT is still rendered for the owner to copy (2026-09-06).
         * The other two were dropped from the screen because nothing was lost with them:
         * the extension field is a multiselect that already shows every option it offers,
         * and the useless-files names are given twice over by the sentence and the
         * try-it-out links beside them. Scan tokens are the case that needs the list -
         * a free textarea, and no reader reconstructs "kcfinder" unaided.
         *
         * Note that two of these are "off" by being empty rather than by a checkbox:
         * scan_path_tokens and deny_files derive their on/off from the list having
         * anything in it.
         *
         * @since 2.0.0
         * @return array<string, mixed>
         */
        protected static function defaults(): array
        {
        }
        /**
         * Read one stored setting.
         *
         * @since 2.0.0
         *
         * @param string $option_id Option id without the prefix.
         *
         * @return mixed
         */
        public static function value(string $option_id)
        {
        }
        /**
         * Has the owner confirmed they can reach their files without WordPress?
         *
         * THE PRECONDITION FOR THIS WHOLE SECTION, and it is not a disclaimer. Every
         * way this module can fail ends in the same place: the site is unreachable, so
         * wp-admin is unreachable, so the setting that caused it cannot be changed from
         * WordPress. The secret login can 404 wp-admin; a denied index.php answers 403
         * for every address; a directive Apache rejects is a 500. In all three the only
         * repair is editing .htaccess on the server. Someone who cannot do that should
         * not be given these switches at all.
         *
         * ASKED OF EVERYONE, INCLUDING EXISTING INSTALLS. Grandfathering was built first
         * and then removed on 2026-08-27, because it was backwards: approving whoever
         * had already ticked something exempts precisely the population this guard is
         * for - people who switched rules on before anybody asked whether they could
         * undo them. An upgrade that asks once is a small friction; a lockout is not.
         *
         * ANSWERED ONCE, then the question disappears and cannot be withdrawn. That is
         * deliberate: a withdrawable confirmation would hide every control while the
         * rules stayed live in the file, which is precisely the stranding we had to fix
         * for the secret-login release constant - rules active, wp-admin 404, and the
         * only switch invisible. If the hosting situation changes, the answer is to
         * switch the protections off, not to un-answer the question.
         *
         * Nothing is written here. An unanswered question reads as "no" through the
         * defaults, which is the safe direction, and the option row appears only when
         * the owner actually saves an answer.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function access_is_confirmed(): bool
        {
        }
        /**
         * The one option here that is a secret rather than a preference.
         *
         * The whole point of the secret login is that the address is not known. An
         * address written into a settings file under uploads, or into a status report
         * pasted into a support ticket, is not a secret any more - and unlike a
         * password, nothing about the site looks wrong afterwards, so nobody finds out
         * that it stopped working.
         *
         * The on/off switch is NOT listed. Knowing that a site hides its login gives
         * away nothing; knowing where it hides it gives away everything.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        public static function secret_options(): array
        {
        }
        /*
         * live_markers() REMOVED 2026-09-06. It wrapped Writer::find_our_markers() and
         * lost its only caller when the grandfathering exception was dropped on
         * 2026-09-02 - see docs/_Roadmap/first-run-gate.md, D3.
         *
         * Its docblock claimed it was "kept for the CLI status output", which was never
         * so: CLI::status() calls $writer->find_our_markers() directly, as does
         * AbstractSectionHTAccess::status_panel(). That false justification is why it sat
         * here unnoticed - protected and unreferenced, on a class nothing extends, so no
         * inspection reports it.
         *
         * The point it recorded is still true and still lives in those two callers: the
         * FILE is the authority on what is live. A site restored from a backup or moved
         * between hosts carries our rules with no matching option rows at all, and those
         * rules are in force whatever the database says.
         */
        /**
         * Read one stored checkbox as a real boolean.
         *
         * WooCommerce stores checkboxes as the strings 'yes' and 'no'. 'no' is a
         * non-empty string and therefore TRUE in a boolean context, so the raw value
         * must never be used directly in an if().
         *
         * @since 2.0.0
         *
         * @param string $option_id Option id without the prefix.
         *
         * @return bool
         */
        public static function is_on(string $option_id): bool
        {
        }
        /**
         * Split a textarea into trimmed, non-empty lines.
         *
         * ONE ENTRY PER LINE, which is what every field description here already
         * promises. Until 2026-08-24 this also split on spaces, commas and pipes, and
         * that was not merely inconvenient - it silently produced entries the admin
         * never typed. "my file.sql" in the deny-file allowlist became "my" and
         * "file.sql"; the first was discarded for having no extension and the second
         * became a live exemption for an unrelated file, with nothing in the UI showing
         * it. Verified: /file.sql answered 404 (allowed through) while /otherfile.sql
         * answered 403.
         *
         * \R matches every line ending, so a CRLF pasted from a Windows editor does not
         * leave a stray carriage return on the end of each entry - which would then be
         * rejected as a control character by the callers' validation.
         *
         * @since 2.0.0
         *
         * @param string $option_id Option id without the prefix.
         *
         * @return string[]
         */
        protected static function lines(string $option_id): array
        {
        }
        /**
         * Parse the free-text endings box into accepted endings and rejected lines.
         *
         * THE ONE FIELD THAT SPLITS ON SPACES, and both halves of that are deliberate.
         *
         * Read {@see ApacheHardening::lines()} first. Splitting on spaces was removed
         * there in 2026-08-24 because it invented entries nobody typed: "my file.sql"
         * became "my" and "file.sql", and the second went live as an exemption for an
         * unrelated file with nothing on screen to show it. That lesson applies here too -
         * this parser rejected a line and kept a fragment of it until the offline check
         * caught it.
         *
         * So the rule is: split a LINE on whitespace and commas, and accept it only if
         * EVERY token on it is a valid ending. One bad token discards the whole line, and
         * the line is reported verbatim. Nothing is ever assembled from the readable part
         * of something we did not understand.
         *
         * That keeps the common case working - ".old .save" and ".old, .save" are what
         * people type into a box labelled "endings", and a line-only split would fail both
         * whole and in silence - without the failure mode that killed the general version.
         *
         * @since 2.0.0
         *
         * @param string $raw Raw textarea content.
         *
         * @return array{kept: string[], dropped: string[]} Endings without the dot, and
         *                                                  the lines that were refused.
         */
        protected static function parse_extensions(string $raw): array
        {
        }
        /**
         * Which .htaccess block each setting writes into.
         *
         * Kept as one table rather than a key on each option, because the interesting
         * cases are the ones where the relationship is not one-to-one, and those are only
         * visible when the whole mapping is read together.
         *
         * NOT DERIVED FROM THE NAMES, although it nearly could be. Twelve of the twenty
         * blocks are simply the option id in PascalCase. Four are written from several
         * settings at once because their rules are interdependent and must share a single
         * marker, so no naming rule can reach them; and two more drifted years ago -
         * "options_hardening" writes the "Options" block, "deny_author_queries" writes
         * "BlockAuthorEnumeration". Renaming those option ids to close the gap was
         * considered and rejected: an option id IS the storage key
         * {@see AbstractModuleHTAccess::make_option_key()}, so a rename orphans the stored
         * value on every existing site and the setting silently reverts to its default -
         * which for a security switch means OFF, on upgrade, with no notice. A lookup
         * table costs one screenful; that costs protection.
         *
         * A value may be an array when one setting affects two blocks.
         *
         * Companion lists (allowlists, token lists) point at the block they feed. They
         * only display when non-empty, so an unused allowlist stays quiet on its own.
         *
         * @since 2.0.0
         * @return array<string, string|string[]>
         */
        protected static function option_blocks(): array
        {
        }
        /**
         * Build the resolved configuration from stored settings.
         *
         * Reads the options table rather than $_POST: WooCommerce saves the fields
         * before firing our hook, so the stored values are already current, and the same
         * code path can then run from activation, from WP-CLI, or from a rebuild button.
         *
         * @since 2.0.0
         * @return \TIV_WOOAT\HTAccess\Config
         */
        public static function build_config(): \TIV_WOOAT\HTAccess\Config
        {
        }
        /**
         * Override owned_markers().
         *
         * This module owns many markers rather than the usual one, so the default -
         * "my own setting id" - would leave the other twelve looking like orphans, and
         * they would be swept on the next save.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        public static function owned_markers(): array
        {
        }
        /**
         * Implement blocks().
         *
         * @since 2.0.0
         * @inheritDoc
         */
        public function blocks(): array
        {
        }
        /**
         * Implement make_insertion(). Unused - blocks() supersedes it.
         *
         * @since 1.3.0
         * @inheritDoc
         */
        protected function make_insertion($option_values)
        {
        }
        /**
         * Override action__write_block_to_htaccess() to keep the gate cookie in step.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        public function action__write_block_to_htaccess()
        {
        }
        /**
         * Give the admin who just saved the cookie their new rules demand.
         *
         * Without this, switching the secret login on locks you out of your own site
         * within one request. The gate goes into .htaccess, WooCommerce redirects to
         * admin.php?page=wc-settings, that URL matches the gate's wp-admin test, the
         * browser has no cookie because the cookie is only ever issued by Apache's CO
         * flag when the secret address is visited - and the response to your own Save is
         * a 404. Changing an existing secret does the same thing, because the cookie
         * still holds the previous one.
         *
         * The cookie is written to match what {@see Generator::rules_secret_login()}
         * emits: same name, same value, same path, HttpOnly always, Secure only on
         * HTTPS. If those two ever drift the gate stops recognising its own cookie.
         *
         * Reads the STORED slug rather than $_POST. WooCommerce saves the fields before
         * firing our hook, so the two are identical here - and reading storage means
         * this also works when nothing was posted at all, which is what makes it usable
         * from WP-CLI or an activation hook later.
         *
         * @since 2.0.0
         * @return void
         */
        protected static function sync_gate_cookie(): void
        {
        }
        /**
         * An advisory notice, rendered under a field.
         *
         * Detection advises, it never decides. Nothing here changes a default,
         * pre-checks a box or blocks a save: a plugin can be active with the
         * overlapping feature switched off, and the site owner knows their own setup
         * better than our guess does.
         *
         * @since 2.0.0
         *
         * @param string $text Notice text.
         *
         * @return string
         */
        protected static function advisory(string $text): string
        {
        }
        /**
         * Format as comment.
         *
         * @since 2.0.0
         * @since 2.0.0 Delegates to {@see Prose::comment()}.
         *
         * @param string|string[] $content
         *
         * @return string
         */
        protected static function comment($content): string
        {
        }
        /**
         * A ready-made list offered under a field that starts empty.
         *
         * Every list here ships empty so that installing the plugin changes nothing (see
         * {@see ApacheHardening::defaults()}). That would otherwise throw away a curated
         * list and leave the owner to invent one, so the list is shown here instead and
         * they can put it in with one copy.
         *
         * Down to ONE caller, 2026-09-06, and the surviving one is the test of whether
         * this is worth showing: the scan-path field is a free textarea, so the reader
         * has an empty box and no way to reconstruct "elfinder", "kcfinder", "adminer".
         * The two that were cut both failed it - the extension field is a multiselect
         * that already displays every option, and the useless-files list was named twice
         * more within three lines.
         *
         * Hence "Start with", not "Suggested". A recommendation invites "on what basis?"
         * and this does not answer it; a starting point makes no claim to be the right
         * or the complete answer.
         *
         * @since 2.0.0
         *
         * @param string[] $values Suggested values.
         *
         * @return string
         */
        protected static function suggestion(array $values): string
        {
        }
        /**
         * "Try it out" links for a rule, opened in a new tab.
         *
         * A rule that refuses a request is invisible until someone makes that request,
         * so the description offers the request itself. The links report the file as it
         * is RIGHT NOW, not the state of the checkbox above them - nothing is written
         * until Save.
         *
         * @since 2.0.0
         *
         * Takes absolute URLs, not paths, because the files these rules cover do not all
         * hang off the same base: dotfiles sit at the document root (home_url()) while
         * readme.html and license.txt are in the WordPress directory (site_url()), which
         * is not the same place when core is installed in a subdirectory. The link text
         * is the path, so the admin reads what they are about to request.
         *
         * @param string[] $urls Absolute URLs on this site.
         *
         * @return string
         */
        protected static function try_it_out(array $urls): string
        {
        }
        /**
         * The wp-* folder addresses that lead nowhere on this site, for display.
         *
         * Empty on a standard install, which is what hides the whole setting - see
         * {@see SitePaths::phantom_wp_segments}. Showing a box that
         * offers to deny /wp-admin/ on a site where /wp-admin/ IS the admin would be
         * offering a lockout.
         *
         * @since 2.0.0
         * @return string[] e.g. array( '/wp-admin/', '/wp-includes/' ).
         */
        protected static function phantom_wp_folders(): array
        {
        }
        /**
         * One representative address per phantom folder, for the "try it out" links.
         *
         * Real scanner targets rather than the bare folder, so what the admin sees is what
         * an attacker actually asks for. Only phantom folders are offered: linking a
         * folder that IS present here would demonstrate nothing and would look like a
         * mistake.
         *
         * @since 2.0.0
         * @return string[] Absolute URLs.
         */
        /**
         * A live address to demonstrate "Use short error replies" with.
         *
         * THIS SETTING REFUSES NOTHING OF ITS OWN. It changes the SHAPE of a refusal
         * some other rule produces, so unlike every other "Try it out" here it has no
         * address of its own to offer. The description used to say "open any test link
         * elsewhere on this page", which asks the reader to go hunting and then remember
         * what the page looked like before.
         *
         * So borrow one, from a rule that is actually switched on. Order is by how
         * unambiguous the refusal is: a webshell name and a phantom script can only ever
         * be refused, while an admin shortcut might be a real path on someone's site.
         *
         * Returns empty when nothing is refusing yet, and the line is then left out
         * entirely - a test link that demonstrates nothing is worse than no link.
         *
         * @since 2.0.0
         * @return string[] At most one URL.
         */
        protected static function error_document_examples(): array
        {
        }
        protected static function phantom_wp_examples(): array
        {
        }
        /**
         * Warn when a shorthand admin address is also a real page on this site.
         *
         * The one case where blocking the shortcuts hurts: a site with a page of its own
         * at /login or /dashboard. Core's redirect never fires there - it only runs on a
         * 404 - but an Apache rule cannot tell the difference and would refuse the page.
         *
         * Advises, does not decide (spec P8). The address is still blocked if the admin
         * ticks the box, because they may well have meant to; what changes is that they
         * are told first, by name, instead of discovering it from a customer.
         *
         * @since 2.0.0
         * @return string
         */
        protected static function shortcut_conflicts(): string
        {
        }
        /**
         * Advisory about plugins that overlap a setting.
         *
         * @since 2.0.0
         *
         * @param string $option_id Option id.
         * @param string $template  Sprintf template with one %s for the plugin names.
         *
         * @return string
         */
        protected static function plugin_advisory(string $option_id, string $template): string
        {
        }
        /**
         * A group heading between fields.
         *
         * @since 2.0.0
         *
         * @param string          $title Heading.
         * @param string|string[] $desc  Description.
         *
         * @return array
         */
        protected static function group(string $title, $desc = ''): array
        {
        }
        /**
         * A checkbox definition.
         *
         * @since 2.0.0
         *
         * @param string          $title Title.
         * @param string|string[] $desc  Description lines.
         *
         * @return array
         */
        protected static function checkbox(string $title, $desc, string $label = 'CHECK_TO_ENABLE'): array
        {
        }
        /**
         * A textarea definition.
         *
         * @since 2.0.0
         *
         * @param string          $title Title.
         * @param string|string[] $desc  Description lines.
         *
         * @return array
         */
        protected static function textarea(string $title, $desc): array
        {
        }
        /**
         * The severity line that opens an attack section.
         *
         * GRADES THE ATTACK, NEVER OUR COVERAGE. "Severity: HIGH" says how bad it is if
         * somebody succeeds; it must never be read as "you are now safe from a HIGH
         * threat". We give an opinion, not a guarantee, and a settings screen that
         * implies otherwise is making a promise nobody can keep.
         *
         * TWO LEVELS ONLY, decided 2026-08-27 after listing what a third would hold:
         *
         * - HIGH   - somebody reads data they should not, or runs code. Recovery means
         *            a clean-up, and possibly telling your customers.
         * - MEDIUM - nothing is taken. It costs you speed, money or uptime, and it
         *            stops costing the moment it stops.
         *
         * A section takes the severity of its WORST attack, the way a vulnerability
         * scanner grades a package by its worst CVE. So five of the six sections are
         * HIGH, and that is not a broken scale - it is what a security module contains.
         * The label's job is to mark the ONE section that is about cost rather than
         * compromise, so nobody switches those off thinking they are optional extras.
         *
         * What separates the HIGH sections from each other is the second line, "How
         * often" - see {@see ApacheHardening::how_often()}. Severity alone would flatten
         * them.
         *
         * Plain <strong>, no colour and no icon. The admin palette varies by user colour
         * scheme, so a hardcoded colour is wrong on at least one of the eight; and the
         * warning icon already means something specific on this screen, so spending it
         * on a heading would dilute the places it marks real breakage.
         *
         * @since 2.0.0
         *
         * @param string $level       Translated level word.
         * @param string $consequence What it costs the owner if it succeeds.
         *
         * @return string
         */
        protected static function severity(string $level, string $consequence): string
        {
        }
        /**
         * The "how often" line, which is what actually separates the HIGH sections.
         *
         * Severity and likelihood point in opposite directions for a small shop. The
         * HIGH attacks need the site to HAVE something - an exposed file, a vulnerable
         * plugin, a shell somebody already planted - and most shops never do. The cost
         * attacks arrive at every site on the internet, every day, automatically.
         *
         * So the expected annual cost of the MEDIUM section is plausibly the higher of
         * the two, and severity on its own invites "MEDIUM, so later". One line fixes
         * that without overstating either.
         *
         * @since 2.0.0
         *
         * @param string $frequency How often this kind of request arrives.
         *
         * @return string
         */
        protected static function how_often(string $frequency): string
        {
        }
        /**
         * The section heading, labelled as the attack it names.
         *
         * The label is the third of a set - the two lines under every heading already
         * read "Severity: ..." and "How often: ...", both properties of the attack, and
         * four of the six open with "If one of these succeeds", whose "these" is this
         * heading. Naming it outright is what makes that antecedent unambiguous.
         *
         * It also settles the agent. A bare gerund has no subject, so "Reading files
         * that were never meant to be public" can be read for a moment as an
         * instruction to the person looking at the screen. One word fixes that, and it
         * is the same word for every section, so a reader learns it once.
         *
         * Consequently, a heading must name what an ATTACKER does, never what the owner
         * or the plugin does: "Attack: Protect your files" is nonsense, and the
         * severity beneath it would then be claiming that protecting files is HIGH.
         *
         * @since 2.0.0
         *
         * @param string $name The attack, named as what the attacker does.
         *
         * @return string
         */
        protected static function attack(string $name): string
        {
        }
        /**
         * Real addresses, formatted as a compact "what it is -> what they ask for" list.
         *
         * The whole point is that these are not illustrations. Several are copied
         * verbatim from a live server log, and those are marked, because "attackers
         * might try this" and "this arrived at a real shop last week" are different
         * claims and only one of them is worth reading.
         *
         * The address is NOT translatable - it is a literal that must stay byte-exact -
         * so each entry pairs a translated description with a raw path.
         *
         * @since 2.0.0
         *
         * @param array<int, array{0:string, 1:string, 2:bool}> $rows Description, path,
         *                                                            seen-in-a-real-log.
         *
         * @return string[]
         */
        protected static function attack_examples(array $rows): array
        {
        }
        /**
         * The standing advice line that replaces the per-rule "(Recommended)" tag.
         *
         * WHY THE TAG GOES. Once severity moves to the section heading, the only
         * question left on an individual checkbox is "will this break my shop?" - and
         * the honest answers are "nothing we know of" and "it might". Saying the first
         * one twenty-two times is clutter, and every wording for it we tried reads as a
         * guarantee: "safe on any site" and "no known side effects" are both promises
         * about somebody else's shop, which we are in no position to make.
         *
         * So the advice is given ONCE, in prose, as advice - and only the exceptions
         * carry a tag. Nothing is marked safe; the risky ones are marked risky. See
         * {@see ApacheHardening::use_with_care()}, which is now the only per-rule tag.
         *
         * @since 2.0.0
         * @return string
         */
        protected static function advise_all(): string
        {
        }
        /**
         * Tag a setting title as one that can break something quietly.
         *
         * Reserved for silent breakage, not for any breakage at all. Anything that breaks
         * NOISILY is untagged: the symptom is immediate, and unticking undoes it. The
         * settings that
         * carry it stop a payment callback, a shipping lookup, an add-to-cart, or the
         * admin itself, with nothing on screen to say why.
         *
         * @since 2.0.0
         *
         * @param string $title Setting title.
         *
         * @return string
         */
        protected static function use_with_care(string $title): string
        {
        }
        /**
         * A collapsed block of secondary text, closed until the reader opens it.
         *
         * @since 2.0.0
         * @since 2.0.0 Delegates to {@see Prose::more()}, which carries the reasoning.
         *
         * @param string   $label Summary line. Plain text.
         * @param string[] $lines Body lines, joined the same way as a description.
         *
         * @return string Empty when there is nothing to hide.
         */
        protected static function more(string $label, array $lines): string
        {
        }
        /**
         * Public address of a file inside this plugin's own folder.
         *
         * NOT plugin_dir_url(), and the difference is not academic. That helper resolves
         * through content_url(), which is unstable on exactly the layout this site uses:
         * a wp-config that guards its WP_CONTENT_URL definition behind
         * $_SERVER['HTTP_HOST'] leaves the constant undefined outside a web request, and
         * core then falls back to site_url() . '/wp-content' - which on a Composer
         * install answers /wp/wp-content and addresses nothing. Measured here: the demo
         * file answered 404 through plugin_dir_url() and 200 through this.
         *
         * Same reasoning and same construction as the uploads link under
         * options_hardening. See {@see SitePaths::content_at_home()}.
         *
         * @since 2.0.0
         *
         * @param string $relative Path relative to the plugin folder.
         *
         * @return string Empty when wp-content has no address under the home path.
         */
        protected static function plugin_asset_url(string $relative): string
        {
        }
        /**
         * Implement setup_fields().
         *
         * @since 1.3.0
         * @inheritDoc
         */
        protected function setup_fields()
        {
        }
        /**
         * Grey out "Use short error replies" when the file already sets error pages.
         *
         * The one directive on this page that REPLACES rather than adds: our
         * ErrorDocument lines and a hand-written set cannot both be in force, and which
         * wins is decided by their order in a file the admin is not looking at.
         * {@see Collisions} has detected this since 2.0.0, but only as a line in the
         * panel header, three screens above the switch it is about.
         *
         * LOCKED ONLY WHEN IT IS OFF, and that limit is the whole design. Disabling the
         * control does NOT stop the block being generated - {@see ApacheHardening::blocks()}
         * builds from the STORED option, so greying out a ticked box would leave the
         * rule in .htaccess with no way to remove it. That is the stranding this
         * codebase has already had to fix once. So:
         *
         * - off, and a clash exists -> locked. It cannot be switched on, and the notice
         *   says why. Nothing about the server changes.
         * - on, and a clash exists -> left alone. The admin already chose this, the rule
         *   is already live, and they keep the switch that turns it off. The warning
         *   already in the description covers the consequence.
         *
         * @since 2.0.0
         * @return void
         */
        protected static function lock_if_error_pages_exist()
        {
        }
        /**
         * Refuse the secret-login gate on a site served on a non-standard port.
         *
         * UNLIKE EVERY OTHER LOCK HERE, this one applies whether the box is ticked or
         * not. The others lock a setting that would be a bad idea; this one locks a
         * setting that CANNOT WORK. {@see Config::gate_is_active()} already refuses to
         * emit the rules, so a ticked box with nothing behind it is the state this
         * explains.
         *
         * The cause is one colon. The gate's cookie is set by a mod_rewrite CO= flag
         * whose fields are colon-separated, with %{HTTP_HOST} as the domain - and
         * HTTP_HOST carries the port whenever it is not the scheme's default, so every
         * field after the domain shifts one place. The cookie arrives with path=0 and
         * without secure or HttpOnly, the browser never sends it back for /wp-admin/,
         * and the gate 404s the owner out of their own site. The CO flag has no
         * quoting, so there is nothing to escape.
         * {@see \TIV_WOOAT\HTAccess\SitePaths::host_port()} carries the measurement.
         *
         * 'value' => 'no' SHOWS THE TRUTH. The stored option is left alone - that is
         * what 'is_option' => false in the field builder buys - so an admin who had the
         * gate on keeps their preference dormant, and moving the site back to a normal
         * port brings it straight back without them re-reading this screen. Rendering
         * the stored 'yes' instead would be the one thing worse than either: a ticked
         * box for a protection that is not running.
         *
         * @since 2.0.0
         * @return void
         */
        protected static function lock_gate_on_nonstandard_port()
        {
        }
        /**
         * Advisory about the currently stored slug.
         *
         * Two different pieces of news, which must not be worded alike. An unusable slug
         * means nothing is hidden, and that is urgent. A short one means the gate is
         * running and could be stronger, which is advice - and saying "NOT active" there
         * would be a lie that sends an administrator looking for a fault.
         *
         * @since 2.0.0
         * @return string
         */
        protected static function slug_advisory(): string
        {
        }
    }
    /**
     * Class ModExpires
     *
     * @since 1.4.0
     */
    class ModExpires extends \TIV_WOOAT\Modules\AbstractModuleHTAccess
    {
        /**
         * My section.
         *
         * Moved from its own "ModExpires" tab into "Performance" in 2.0.0. "ModExpires"
         * named the Apache module doing the work; nobody shopping for a faster site
         * looks for that. Stored values are unaffected - option keys come from the class
         * name, not the section.
         *
         * @since 1.4.0
         * @since 2.0.0 Was 'mod_expires'.
         * @inheritDoc
         */
        public static function my_section()
        {
        }
        /**
         * Var options.
         *
         * @since 1.4.0
         *
         * @var array[]
         */
        protected static $options;
        /**
         * Override setup_hooks().
         *
         * @since 1.4.0
         * @inheritDoc
         */
        public function setup_hooks()
        {
        }
        /**
         * Method select_options_expires_plus.
         *
         * @since 1.4.0
         * @return string[]
         */
        protected static function select_options_expires_plus()
        {
        }
        /**
         * Implement setup_fields().
         *
         * @since 1.4.0
         * @inheritDoc
         */
        protected function setup_fields()
        {
        }
        /**
         * Method mod_expires_start.
         *
         * @since 1.4.0
         * @return string
         */
        protected static function mod_expires_start()
        {
        }
        /**
         * Method mod_expires_end.
         *
         * @since 1.4.0
         * @return string
         */
        protected static function mod_expires_end()
        {
        }
        /**
         * Implement make_insertion().
         *
         * @since 1.4.0
         *
         * @inheritDoc
         */
        protected function make_insertion($option_values)
        {
        }
    }
    /**
     * Class PHPSettings
     *
     * @since 1.3.0
     */
    class PHPSettings extends \TIV_WOOAT\Modules\AbstractModuleHTAccess
    {
        /**
         * My section - the default home for options that do not name one.
         *
         * Five of the seven settings here are resource limits, so Performance is the
         * default. The two error-display switches are tagged
         * 'section' => 'security' in setup_fields() and render on the Security tab
         * instead: showing your visitors a PHP error is a disclosure problem, not a
         * speed one.
         *
         * Stored values are unaffected - option keys come from the class name.
         *
         * @since 1.3.0
         * @since 2.0.0 Was 'php_settings'; the module now spans two tabs.
         * @inheritDoc
         */
        public static function my_section()
        {
        }
        /**
         * Override my_sections() - this module renders on both outcome tabs.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        public static function my_sections(): array
        {
        }
        /**
         * Statement in .htaccess
         *
         * @since 1.3.0
         * @var string
         */
        private const PHP_FLAG = 'php_flag';
        /**
         * Statement in .htaccess
         *
         * @since 1.3.0
         * @var string
         */
        private const PHP_VALUE = 'php_value';
        /**
         * Var options.
         *
         * @since 1.3.0
         *
         * @var array[]
         */
        protected static $options = array();
        /**
         * Var texts.
         *
         * @since 1.3.0
         *
         * @var array[]
         */
        protected $texts = array();
        /**
         * Override setup_hooks().
         *
         * @since 1.3.0
         * @inheritDoc
         */
        public function setup_hooks()
        {
        }
        /**
         * Method setup_texts.
         *
         * @since 1.3.0
         * @return void
         */
        protected function setup_texts()
        {
        }
        /**
         * Method select_options_yes_no.
         *
         * @since 1.3.0
         * @return string[]
         */
        protected static function select_options_yes_no()
        {
        }
        /**
         * Implement setup_fields().
         *
         * @since 1.3.0
         * @inheritDoc
         */
        protected function setup_fields()
        {
        }
        /**
         * The PHP directives this module can write.
         *
         * The option ids ARE the directive names - that is how make_insertion() builds
         * each line - so the list is read from the field definitions rather than kept a
         * second time. Empty until setup_fields() has run on init, which is harmless:
         * every caller is a screen rendered long after that.
         *
         * @since 2.0.0
         * @return string[]
         */
        public static function directives(): array
        {
        }
        /**
         * Append "here is what PHP is actually running" to every field.
         *
         * WHY THE FIELD ALONE IS NOT ENOUGH. What the box holds is a REQUEST - the
         * number we will write into .htaccess. Whether PHP ends up using it is a
         * different question, and until this existed the screen could not tell them
         * apart. Measured on a real site: the box said 120, the directive was in the
         * file, Apache applied it, and PHP was running 90, because the site's own
         * wp-config called ini_set().
         *
         * WHY THERE IS NO "MASTER VALUE" HERE, though phpinfo() shows one. PHP keeps
         * exactly two strings per directive: the value before the first post-startup
         * change, and the current one. On that same site they were 180 (php.ini) and
         * 90 - so our own 120 appeared in NEITHER, because a later ini_set() erased
         * the middle step. A third number that is neither the box nor the truth is
         * what made the row unreadable in the first place.
         *
         * FOR THE SAME REASON THIS DOES NOT AUDIT US. A mismatch proves the field's
         * number is not what is running; it cannot prove our rule failed, since any
         * ini_set() or set_time_limit() anywhere in the request produces the same
         * result - and WooCommerce calls set_time_limit() in its background
         * processors. The copy says what is known and stops there.
         *
         * @since 2.0.0
         * @return void
         */
        protected static function append_live_state()
        {
        }
        /**
         * What this plugin has been asked to write.
         *
         * @since 2.0.0
         *
         * @param string $option_id Directive name, which is also the option id.
         *
         * @return string Empty when nothing was entered.
         */
        protected static function stored_value(string $option_id): string
        {
        }
        /**
         * What PHP is using right now, as the reader should see it.
         *
         * Read with ini_get() and nothing else, because it returns the LOCAL value -
         * the only number that describes the running site.
         *
         * @since 2.0.0
         *
         * @param string $option_id Directive name.
         * @param array  $option    Option definition.
         *
         * @return string
         */
        protected static function in_force_display(string $option_id, array $option): string
        {
        }
        /**
         * Does what is running differ from what was asked for?
         *
         * Compared after normalising, or every size field would report a false
         * mismatch: "256M" and "268435456" are the same limit written two ways, and a
         * flag is '1' here and '' or 'STDOUT' from PHP.
         *
         * An empty field asks for nothing, so there is nothing to disagree with.
         *
         * @since 2.0.0
         *
         * @param string $option_id Directive name.
         * @param array  $option    Option definition.
         *
         * @return bool
         */
        protected static function differs_from_stored(string $option_id, array $option): bool
        {
        }
        /**
         * One directive value, reduced to a form two sources can be compared in.
         *
         * @since 2.0.0
         *
         * @param string $value  Raw value from either side.
         * @param array  $option Option definition.
         *
         * @return string
         */
        protected static function normalise(string $value, array $option): string
        {
        }
        /**
         * Is a php_flag value on?
         *
         * PHP answers this question in more than one dialect. display_errors alone can
         * come back as '1', 'On', 'STDOUT' or 'stderr', and every one of them means
         * errors are being printed.
         *
         * @since 2.0.0
         *
         * @param string $value Raw value.
         *
         * @return bool
         */
        protected static function flag_is_on(string $value): bool
        {
        }
        /**
         * Implement make_insertion().
         *
         * @since 1.3.0
         *
         * @inheritDoc
         */
        protected function make_insertion($option_values)
        {
        }
    }
}
namespace TIV_WOOAT\Modules\Maintenance {
    /**
     * Class ResetAllSettings
     *
     * @since 1.0.0
     */
    class ResetAllSettings extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * An action run from the WooCommerce settings screen, which does not exist without it.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Override is_action().
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function is_action(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
        /**
         * Delete every setting, and take the generated .htaccess rules with them.
         *
         * @since 2.0.0
         * @return void
         */
        public function action__reset()
        {
        }
    }
    /**
     * Class RestoreSettingsFrom
     *
     * @since 1.0.0
     */
    class RestoreSettingsFrom extends \TIV_WOOAT\Modules\AbstractModuleSelect
    {
        /**
         * Override requires_woocommerce().
         *
         * An action run from the WooCommerce settings screen, which does not exist without it.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Override is_action().
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function is_action(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Implement setting_select_options() method.
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected static function setting_select_options()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
        /**
         * Put a saved file back.
         *
         * @since 2.0.0
         * @return void
         */
        public function action__restore()
        {
        }
        /**
         * Rewrite the generated blocks to match what was just restored.
         *
         * @since 2.0.0
         * @return string A line for the report.
         */
        protected static function rebuild_htaccess(): string
        {
        }
        /**
         * Say what came back, what did not, and where the file came from.
         *
         * A restore that quietly drops half a file is worse than one that refuses, so
         * anything skipped is named rather than counted.
         *
         * @since 2.0.0
         *
         * @param string               $filename Name shown in the dropdown.
         * @param array<string, mixed> $backup   Parsed file.
         * @param array<string, mixed> $sorted   Output of Backup::classify().
         *
         * @return string
         */
        protected static function describe(string $filename, array $backup, array $sorted): string
        {
        }
    }
    /**
     * Class SaveSettingsTo
     *
     * @since 1.0.0
     */
    class SaveSettingsTo extends \TIV_WOOAT\Modules\AbstractModuleText
    {
        /**
         * Override requires_woocommerce().
         *
         * An action run from the WooCommerce settings screen, which does not exist without it.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Override is_action().
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function is_action(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Method validation_message.
         *
         * @since 1.0.0
         * @return string
         */
        protected static function validation_message()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_custom_attributes().
         *
         * @inheritdoc
         */
        protected static function setting_custom_attributes()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
}
namespace TIV_WOOAT\Modules {
    /**
     * Class ModulesController
     *
     * @since 1.0.0
     */
    class ModulesController extends \TIV_WOOAT\Abstracts\Hookable
    {
        /**
         * Files in the module folders that are not modules, as "Folder/File".
         *
         * Left out by NAME, before anything loads them. The callers' is_subclass_of()
         * test autoloads the class, and this one extends a WooCommerce Blocks class:
         * loading it on a site without WooCommerce is a fatal error.
         *
         * @since 2.1.0
         * @var string[]
         */
        private const NOT_MODULES = array('Development/WC_Gateway_Fake_Payment_Blocks_Support');
        /**
         * Every class that lives in a module folder.
         *
         * Helpers known by name are left out {@see ModulesController::NOT_MODULES}.
         * Callers must still check what they get back before using it.
         *
         * @since 2.0.0
         * @since 2.1.0 Leaves out the helpers listed in NOT_MODULES.
         * @return string[] Fully qualified class names.
         */
        public static function module_classes(): array
        {
        }
        /**
         * The module classes that apply to this site.
         *
         * Every class from {@see module_classes()} that is a module, minus those that
         * need WooCommerce when WooCommerce is not here.
         *
         * @since 2.1.0
         * @return string[] Fully qualified class names.
         */
        public static function active_module_classes(): array
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since 1.0.0
         * @since 2.1.0 Skips the modules that need WooCommerce when it is absent.
         *
         * @return void
         */
        public function setup_hooks()
        {
        }
    }
}
namespace TIV_WOOAT\Modules\PostsPages {
    /**
     * Class AutoDate
     *
     * @since 1.0.0
     */
    class AutoDate extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.1.0-6
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Implement module_hooks()
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class EnablePageExcerpt
     *
     * @since 1.0.0
     */
    class EnablePageExcerpt extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritDoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Implement module_hooks()
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class RevisionsToKeep
     *
     * @since 1.0.0
     */
    class RevisionsToKeep extends \TIV_WOOAT\Modules\AbstractModuleNumber
    {
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritdoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Warning when wp-config already sets a limit that this field would beat.
         *
         * NOT GREYED OUT, unlike the two file-editor and cron switches, and the
         * difference is real rather than a matter of taste. Those two yield to their
         * constant and can do nothing; this one WINS. Core's own docblock on
         * `wp_revisions_to_keep` says the filter "Overrides the value of
         * WP_POST_REVISIONS", and our callback returns unconditionally. Disabling a
         * control that works would take away a capability the admin has today.
         *
         * So it warns instead - and it has to, because this is the setting whose own
         * description says lowering it destroys history permanently. Silently beating a
         * number somebody deliberately put in wp-config.php is how that happens by
         * accident.
         *
         * `defined()` IS USELESS HERE. wp-includes/default-constants.php defines
         * WP_POST_REVISIONS as `true` on every site that has not set it, so the test is
         * on the VALUE: anything other than `true` was chosen by somebody. Verified on a
         * site whose wp-config sets nothing - the constant is still `true` at runtime.
         *
         * @since 2.0.0
         * @return string
         */
        protected static function constant_warning(): string
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.1.0-6
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Override setting_custom_attributes().
         *
         * @inheritdoc
         */
        protected static function setting_custom_attributes()
        {
        }
        /**
         * Implement module_hooks()
         *
         * @since 1.0.0
         * @inheritDoc
         */
        protected function module_hooks()
        {
        }
    }
}
namespace TIV_WOOAT\Modules\Security {
    /**
     * Class DisableFileEdit
     *
     * @since 1.0.0
     */
    class DisableFileEdit extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * The constant this module sets.
         *
         * @since 2.0.0
         * @var string
         */
        protected const CONSTANT = 'DISALLOW_FILE_EDIT';
        /**
         * True when WE were the one that defined it.
         *
         * Needed because {@see DisableFileEdit::setting_conflict()} runs long after
         * module_hooks(), so by then the constant is set on any site where this box is
         * ticked - by us. Without this flag the check would report a conflict with
         * itself on exactly the sites where everything is working.
         *
         * @since 2.0.0
         * @var bool
         */
        protected static $defined_here = false;
        /**
         * Is something else already deciding this?
         *
         * WordPress does NOT define this constant itself - verified against
         * wp-includes/default-constants.php, which defaults WP_POST_REVISIONS and
         * WP_MEMORY_LIMIT but not this one. So "defined, and not by us" means a human
         * put it in wp-config.php, and that has the final say: module_hooks() below
         * yields to it, and always has.
         *
         * Both directions are reported, because both take the decision away from this
         * checkbox. The `false` case is the one that made showing the real value
         * necessary: wp-config deliberately keeping the editors OPEN, next to a stored
         * 'yes', would otherwise draw a ticked box on a site where anyone with admin
         * access can still rewrite a theme file.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        protected static function setting_conflict(): array
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritdoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
}
namespace TIV_WOOAT\Modules\WC {
    /**
     * Class DisableProductGalleryLightbox
     *
     * @since 1.4.0
     */
    class DisableProductGalleryLightbox extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * Hooks into WooCommerce templates and filters only.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.4.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.4.0
         *
         * @inheritdoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.4.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.4.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class DisableProductGallerySlider
     *
     * @since 1.4.0
     */
    class DisableProductGallerySlider extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * Hooks into WooCommerce templates and filters only.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.4.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.4.0
         *
         * @inheritdoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.4.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.4.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class DisableSingleProductZoom
     *
     * @since 1.2.0
     */
    class DisableSingleProductZoom extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * Hooks into WooCommerce templates and filters only.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.2.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.2.0
         *
         * @inheritdoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.2.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.2.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class EnableBlockEditor
     *
     * @since 1.2.0
     */
    class EnableBlockEditor extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * Hooks into WooCommerce templates and filters only.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.2.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.2.0
         *
         * @inheritdoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.2.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.2.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class HideBreadcrumbs
     *
     * @since 1.0.0
     */
    class HideBreadcrumbs extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * Hooks into WooCommerce templates and filters only.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritdoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class HideRelatedProducts
     *
     * @since 1.0.0
     */
    class HideRelatedProducts extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * Hooks into WooCommerce templates and filters only.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritdoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.2.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
    /**
     * Class HideX1
     *
     * @since 1.0.0
     */
    class HideX1 extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * Hooks into WooCommerce templates and filters only.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritdoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Override setting_comment().
         *
         * @since 1.2.0
         * @inheritDoc
         */
        protected static function setting_comment()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
        /**
         * Hide "x1" in Order details.
         *
         * @since 1.0.0
         *
         * @param string         $html HTML.
         * @param \WC_Order_Item $item Order Item.
         *
         * @return string
         */
        public function hide_x1_on_view_order($html = '', $item = null)
        {
        }
        /**
         * Hide "x1" on Checkout.
         *
         * @since 1.0.0
         *
         * @param string $html      HTML.
         * @param array  $cart_item Cart Item.
         *
         * @return string
         */
        public function hide_x1_on_checkout($html = '', $cart_item = array())
        {
        }
    }
}
namespace TIV_WOOAT\Modules\WCS {
    /**
     * Class EnableStagingMode
     *
     * @since 1.0.0
     */
    class EnableStagingMode extends \TIV_WOOAT\Modules\AbstractModuleCheckbox
    {
        /**
         * Override requires_woocommerce().
         *
         * A WooCommerce Subscriptions switch.
         *
         * @since 2.1.0
         * @inheritDoc
         */
        public static function requires_woocommerce(): bool
        {
        }
        /**
         * Setting title.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected static function setting_title()
        {
        }
        /**
         * Setting description.
         *
         * @since 1.0.0
         *
         * @inheritdoc
         */
        protected static function setting_description()
        {
        }
        /**
         * Setup module-specific actions and filters.
         *
         * @since 1.0.0
         *
         * @return void
         */
        protected function module_hooks()
        {
        }
    }
}
namespace TIV_WOOAT\Settings {
    /**
     * Class Backup
     *
     * Both halves of save-and-restore live here so they cannot drift apart. A reader
     * that disagrees with the writer about what a stored value means is how the
     * double-serialization bug below came about in the first place.
     *
     * @since 2.0.0
     */
    class Backup
    {
        /**
         * Current file format.
         *
         * @since 2.0.0
         * @var int
         */
        public const FORMAT = 2;
        /**
         * Format 1: a bare JSON list of {option_name, option_value}, no metadata.
         *
         * Written by every version up to 1.9.6. Still readable - a backup somebody made
         * last year is exactly when this feature has to work.
         *
         * @since 2.0.0
         * @var int
         */
        public const FORMAT_LEGACY = 1;
        /**
         * How many times to unwrap a doubly-serialized value before giving up.
         *
         * @since 2.0.0
         * @var int
         */
        protected const UNWRAP_LIMIT = 10;
        /**
         * Keys that are never saved and never restored.
         *
         * These three are not settings. They are one-shot instructions, read and deleted
         * the moment they are seen, and the value 'yes' in the first of them means
         * "delete everything". A file that carried it - written by hand, or copied from a
         * site mid-reset - would wipe the settings of whoever restored it.
         *
         * @since 2.0.0
         * @var string[]
         */
        protected const EXCLUDED = array('Maintenance_ResetAllSettings', 'Maintenance_RestoreSettingsFrom', 'Maintenance_SaveSettingsTo');
        /**
         * Keys that belong to no module but are still ours to keep.
         *
         * @since 2.0.0
         * @var string[]
         */
        protected const NON_MODULE_KEYS = array(\TIV_WOOAT\Settings\UpgradeNotice::OPTION_DISMISSED);
        /**
         * Undo an accidental extra round of serialization.
         * update_option() runs maybe_serialize(), which re-serializes any string that
         * merely LOOKS serialized - that is deliberate in core, so a later unserialize
         * cannot run twice on one value. Older versions of this feature stored the raw
         * option_value column in the .json and fed it straight back to update_option(),
         * so every array-valued setting picked up one extra wrapper per save-restore
         * cycle and came back as a string instead of an array.
         *
         * Peeling here repairs those files on the way in. The loop is bounded because a
         * file that has been through the cycle many times nests many times.
         *
         * @since 2.0.0
         *
         * @param mixed $value Value as it was read from the file.
         *
         * @return mixed
         */
        public static function heal($value)
        {
        }
        /**
         * Is this row a one-shot instruction rather than a setting?
         *
         * WooCommerce writes EVERY field on a section when that section is saved, not
         * only the changed ones, so these three rows exist on any site whose Maintenance
         * tab has ever been saved. They are instructions that were already carried out,
         * and putting them in a backup would mean restoring an instruction.
         *
         * @since 2.0.0
         *
         * @param string $option_key Full option name.
         *
         * @return bool
         */
        protected static function is_operation_trigger(string $option_key): bool
        {
        }
        /**
         * Is some live module still answering for this key?
         *
         * @since 2.0.0
         *
         * @param string $option_key Full option name.
         *
         * @return bool
         */
        public static function is_known_key(string $option_key): bool
        {
        }
        /**
         * Is this key a credential that must never reach the file?
         *
         * @since 2.0.0
         *
         * @param string $option_key Full option name.
         *
         * @return bool
         */
        public static function is_secret_key(string $option_key): bool
        {
        }
        /**
         * Everything that goes into a new backup file.
         *
         * Values are stored decoded, so an array is a real JSON array rather than a
         * serialized string. That is what makes the round trip safe, and it makes the
         * file readable by a human looking for what a site used to have.
         *
         * @since 2.0.0
         * @return array<string, mixed>
         */
        public static function build(): array
        {
        }
        /**
         * Read a decoded file into one shape, whichever format it was written in.
         *
         * @since 2.0.0
         *
         * @param mixed $data Decoded JSON.
         *
         * @return array<string, mixed>|null Null when the file is not one of ours.
         */
        public static function read($data): ?array
        {
        }
        /**
         * Split the options in a file into the ones we can use and the ones we cannot.
         *
         * @since 2.0.0
         *
         * @param array<string, mixed> $options Option name => value.
         *
         * @return array{restore: array<string, mixed>, skipped: string[]}
         */
        public static function classify(array $options): array
        {
        }
        /**
         * Does this file carry anything that ends up in .htaccess?
         *
         * @since 2.0.0
         *
         * @param array<string, mixed> $options Option name => value.
         *
         * @return bool
         */
        public static function touches_htaccess(array $options): bool
        {
        }
    }
    /**
     * Class CLI
     *
     * Read and change the Admin Tools settings.
     *
     * WHY THIS EXISTS. The settings screen is a WooCommerce settings tab, so a site
     * without WooCommerce has no screen at all - and the security settings are the
     * ones such a site needs most. This is the same settings store, reached without a
     * browser.
     *
     * SAME RULES AS THE SCREEN, as far as they apply:
     * - Only settings that apply here are offered: no WooCommerce-only module on a
     *   site without WooCommerce, no secret-login fields where the screen hides them.
     * - A control the screen locks - because something outside this plugin decides
     *   it, such as a wp-config constant - cannot be set here either.
     * - The value goes through the same sanitize filter the screen's save runs, so
     *   the stored value is what the screen would have stored.
     * - A setting that writes .htaccess rebuilds it, as saving the tab does.
     *
     * NOT ASKED: the first-run question {@see FirstRunGate}. It asks whether the
     * reader can edit files on the server without WordPress. Somebody typing into a
     * shell on that server has answered it. The .htaccess commands skip it for the
     * same reason.
     *
     * @since 2.1.0
     */
    class CLI
    {
        /**
         * Setting types this command knows how to write.
         *
         * Anything else is a screen-only control (a button, a heading) and is not
         * offered.
         *
         * @since 2.1.0
         * @var string[]
         */
        private const TYPES = array('checkbox', 'text', 'textarea', 'number', 'email', 'select', 'multiselect');
        /**
         * Every setting that applies to this site.
         *
         * @since 2.1.0
         * @return array<string, array{module: string, field: array}> Short name => where it lives and how.
         */
        public static function catalog(): array
        {
        }
        /**
         * Add one field to the catalog, if it is a stored setting we can write.
         *
         * @since 2.1.0
         *
         * @param array  $catalog Catalog, by reference.
         * @param string $module  Module class.
         * @param array  $field   Field definition; 'id' is the full option key.
         *
         * @return void
         */
        protected static function add(array &$catalog, string $module, array $field): void
        {
        }
        /**
         * The option key without the common prefix, which is how settings are named here.
         *
         * @since 2.1.0
         *
         * @param string $option_key Full option key.
         *
         * @return string
         */
        protected static function short_name(string $option_key): string
        {
        }
        /**
         * Find a setting by name, with or without the prefix, or stop with an error.
         *
         * @since 2.1.0
         *
         * @param string $name Setting name.
         *
         * @return array{module: string, field: array}
         */
        protected static function find(string $name): array
        {
        }
        /**
         * The stored value, or the default when nothing is stored.
         *
         * @since 2.1.0
         *
         * @param array $field Field definition.
         *
         * @return mixed
         */
        public static function stored(array $field)
        {
        }
        /**
         * Is this a credential, to be kept off the screen in a listing?
         *
         * @since 2.1.0
         *
         * @param array{module: string, field: array} $entry Catalog entry.
         *
         * @return bool
         */
        protected static function is_secret(array $entry): bool
        {
        }
        /**
         * A value as one line of text.
         *
         * @since 2.1.0
         *
         * @param mixed $value Value.
         *
         * @return string
         */
        public static function as_text($value): string
        {
        }
        /**
         * List the settings that apply to this site.
         *
         * ## OPTIONS
         *
         * [<search>]
         * : Show only the settings whose name contains this text.
         *
         * [--format=<format>]
         * : Output format.
         * ---
         * default: table
         * options:
         *   - table
         *   - csv
         *   - json
         *   - yaml
         * ---
         *
         * ## EXAMPLES
         *
         *     wp tiv-wooat config list
         *     wp tiv-wooat config list block
         *
         * @subcommand list
         *
         * @since 2.1.0
         *
         * @param string[] $args       Positional arguments.
         * @param string[] $assoc_args Associative arguments.
         *
         * @return void
         */
        public function list_($args = array(), $assoc_args = array()): void
        {
        }
        /**
         * Print one setting's value.
         *
         * Prints secrets too: whoever can run this can read the database anyway.
         *
         * ## OPTIONS
         *
         * <name>
         * : Setting name, as "list" shows it.
         *
         * ## EXAMPLES
         *
         *     wp tiv-wooat config get ApacheHardening_block_xmlrpc
         *
         * @since 2.1.0
         *
         * @param string[] $args Positional arguments.
         *
         * @return void
         */
        public function get($args): void
        {
        }
        /**
         * Change one setting.
         *
         * ## OPTIONS
         *
         * <name>
         * : Setting name, as "list" shows it.
         *
         * <value>
         * : New value. Checkbox: yes or no. Multiselect: comma-separated choices.
         * Textarea: one entry per line - in bash, $'first\nsecond'.
         *
         * [--skip-rebuild]
         * : Do not rewrite .htaccess yet. For several changes in a row; finish with
         * "wp tiv-wooat htaccess rebuild".
         *
         * ## EXAMPLES
         *
         *     wp tiv-wooat config set ApacheHardening_block_xmlrpc yes
         *     wp tiv-wooat config set ApacheHardening_deny_file_extensions sql,log --skip-rebuild
         *     wp tiv-wooat config set Security_DisableFileEdit yes
         *
         * @since 2.1.0
         *
         * @param string[] $args       Positional arguments.
         * @param string[] $assoc_args Associative arguments.
         *
         * @return void
         */
        public function set($args, $assoc_args = array()): void
        {
        }
        /**
         * Store a value the way the settings screen's Save would.
         *
         * Runs the filter the screen's save runs, so a value stored from here is the
         * value the screen would have stored. Our own sanitizers hang off it.
         *
         * @see   \WC_Admin_Settings::save_fields()
         *
         * @since 2.1.0
         *
         * @param array           $field Field definition.
         * @param string|string[] $value Value, already in stored form.
         *
         * @return mixed What was stored.
         */
        public static function store(array $field, $value)
        {
        }
        /**
         * The choices of a select, for an error message. The empty one is spelled out.
         *
         * @since 2.1.0
         *
         * @param array $options Value => label.
         *
         * @return string
         */
        protected static function choices(array $options): string
        {
        }
        /**
         * Delete every Admin Tools setting, and the .htaccess rules they wrote.
         *
         * What "Reset all Admin Tools settings?" does on the settings screen
         * {@see \TIV_WOOAT\Modules\Maintenance\ResetAllSettings}: the .htaccess blocks go
         * first, and if they cannot be removed nothing is deleted - clearing the
         * settings while the rules stay live would leave a site that enforces rules
         * nobody can see.
         *
         * ## OPTIONS
         *
         * [--yes]
         * : Do not ask for confirmation.
         *
         * ## EXAMPLES
         *
         *     wp tiv-wooat config reset
         *
         * @since 2.1.0
         *
         * @param string[] $args       Positional arguments.
         * @param string[] $assoc_args Associative arguments.
         *
         * @return void
         */
        public function reset($args = array(), $assoc_args = array()): void
        {
        }
        /**
         * Turn the typed text into what the settings screen would store, or stop.
         *
         * @since 2.1.0
         *
         * @param array  $field Field definition.
         * @param string $raw   Typed value.
         *
         * @return string|string[]
         */
        protected static function normalize(array $field, string $raw)
        {
        }
        /**
         * Register the commands.
         *
         * @since 2.1.0
         * @return void
         */
        public static function register(): void
        {
        }
    }
    /**
     * Class FirstRunGate
     *
     * Every way this plugin can hurt a site ends somewhere the settings screen cannot
     * reach: a webserver rule that stops the site loading, so wp-admin is gone too, or
     * a change that has already altered content, so putting the setting back does not
     * put the content back. Both are survivable by somebody who can edit files on the
     * server or restore a backup. Neither is survivable by somebody who cannot.
     *
     * So we ask, once, and lock the screens until it is answered.
     *
     * PER USER, not per site {@see FirstRunGate::is_confirmed()}. The question is
     * about the person reading it. An answer given by whoever installed the plugin
     * says nothing about the administrator who inherits the site two years later.
     *
     * NOT A WOOCOMMERCE SETTINGS FIELD, and it cannot become one. The gate's whole
     * job is to make Save do nothing, and a field cannot be saved by a dead Save
     * button. Carving out an exception would be worse: WC_Admin_Settings::save_fields()
     * writes EVERY registered field once it runs at all, and a disabled input is not
     * submitted by the browser, so a single save with the fields disabled would write
     * the empty value over all of them - every checkbox to 'no', every list to ''.
     *
     * Hence its own form, rendered at 'woocommerce_settings_start', which fires in
     * WC_Admin_Settings::output() before the template - and therefore before
     * <form id="mainform"> opens. Rendering inside that form was the other option and
     * is not available: nested forms are invalid HTML.
     *
     * @since 2.0.0
     */
    class FirstRunGate extends \TIV_WOOAT\Abstracts\Hookable
    {
        /**
         * User meta holding the answer.
         *
         * @since 2.0.0
         * @var string
         */
        public const META_KEY = 'tiv_wooat_gate_confirmed';
        /**
         * Query argument carrying the answer.
         *
         * @since 2.0.0
         * @var string
         */
        protected const ARG_CONFIRM = 'tiv_wooat_confirm_gate';
        /**
         * Name of the checkbox in the gate's own form.
         *
         * @since 2.0.0
         * @var string
         */
        protected const FIELD = 'tiv_wooat_gate_accept';
        /**
         * Has THIS user answered?
         *
         * @since 2.0.0
         * @return bool
         */
        public static function is_confirmed(): bool
        {
        }
        /**
         * Is this a screen the gate applies to?
         *
         * 'woocommerce_settings_start' fires for every WooCommerce settings tab, so
         * without this the gate would appear on Products, Tax and the rest.
         *
         * @since 2.0.0
         * @return bool
         */
        protected static function is_our_tab(): bool
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since 2.0.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Refuse the save before WooCommerce decides to perform one.
         *
         * The filter name carries the section, so rather than enumerating every section
         * this reads the one being saved and answers for exactly that.
         *
         * wp_loaded at 9, because WC_Admin_Menus::save_settings() runs on wp_loaded at
         * the default 10 and the filter has to exist before it asks. This was admin_init
         * until 2.1.0 - which fires AFTER wp_loaded, so the filter arrived once the save
         * was already done, and the lock never held. Measured 2026-10-16 on WC 11.2.1:
         * an unanswered gate, a posted form, the setting changed.
         *
         * The nonce is checked first, and it is WooCommerce's own: no save happens
         * without it, because WC_Admin_Settings::save() dies on check_admin_referer()
         * for the same action. So a request without it has nothing to lock, and the
         * tab and section are only read from a request that is already verified.
         *
         * @since 2.0.0
         * @since 2.1.0 On wp_loaded, and only for a request carrying the settings nonce.
         * @return void
         */
        public static function lock_saves()
        {
        }
        /**
         * Refuse every save on our tab until the question is answered.
         *
         * @since 2.0.0
         *
         * @param bool $allowed What WooCommerce was going to do.
         *
         * @return bool
         */
        public static function filter__allow_save($allowed)
        {
        }
        /**
         * Record the answer.
         *
         * @since 2.0.0
         * @return void
         */
        public static function maybe_confirm()
        {
        }
        /**
         * The claim being made, which is shorter on a server that ignores .htaccess.
         *
         * Asking about a file the server never reads teaches people to tick without
         * reading, which is the one thing this screen cannot afford.
         *
         * @since 2.0.0
         * @return string
         */
        protected static function label(): string
        {
        }
        /**
         * The explanation, and the way back out.
         *
         * OPEN BY DEFAULT since 2.0.0, and that is the point of it. This is the one
         * moment we know the reader is reading: they cannot use any of these settings
         * until they answer, and they are answering BEFORE the first save - which is
         * the only time recovery instructions can be taken in ahead of needing them.
         * Collapsed, it was a gate that hid its own justification, which is what makes
         * a confirmation read as a formality to click past.
         *
         * It also used to name the file without ever saying what to do with it: the
         * reader was asked to promise they could edit files on the server, with no way
         * to judge what that would involve. The removal steps turn that into something
         * they can check they understand before ticking.
         *
         * The path is named because it is the one thing the reader cannot look up
         * later: when it is needed, this screen is exactly what has become unreachable.
         *
         * @since 2.0.0
         * @return string
         */
        protected static function why(): string
        {
        }
        /**
         * Print the gate, and lock the form behind it.
         *
         * @since 2.0.0
         * @return void
         */
        public static function render()
        {
        }
        /**
         * Grey out the form the gate is holding shut.
         *
         * Cosmetic only, and deliberately so. {@see FirstRunGate::filter__allow_save()}
         * is what refuses the save, and it does not care what the browser did with these
         * attributes - somebody who re-enables the form by hand gets a page that saves
         * nothing rather than a page that damages something.
         *
         * Scoped to #mainform so the gate's own form, which is outside it, keeps working.
         *
         * @since 2.0.0
         * @return void
         */
        protected static function print_lock_script(): void
        {
        }
    }
    /**
     * Class MaintenanceReport
     *
     * These operations run one page load AFTER the click that asked for them. The
     * settings are stored by WooCommerce on admin_init priority 50, but a module only
     * registers its hooks when its option is already set, and that decision is made
     * back at plugins_loaded. So the work happens on the next admin request, by which
     * time WC_Admin_Settings::add_message() may have no settings page left to print on.
     *
     * Hence a transient rather than an inline message: it is written wherever the work
     * happened and read on the next admin screen, whichever that turns out to be. Held
     * per user, because it is an answer to one person's action and not site news.
     *
     * @since 2.0.0
     */
    class MaintenanceReport extends \TIV_WOOAT\Abstracts\Hookable
    {
        /**
         * Transient name, without the user id.
         *
         * @since 2.0.0
         * @var string
         */
        protected const TRANSIENT = 'tiv_wooat_maintenance_report_';
        /**
         * How long an unread report survives.
         *
         * Long enough to reach the next page load, short enough that a report nobody
         * came back for does not resurface days later out of context.
         *
         * @since 2.0.0
         * @var int
         */
        protected const TTL = 300;
        /**
         * Transient name for the current user.
         *
         * @since 2.0.0
         * @return string
         */
        protected static function key(): string
        {
        }
        /**
         * Queue a report for the current user.
         *
         * @since 2.0.0
         *
         * @param string|string[] $lines   One or more lines. HTML allowed, kses applied on output.
         * @param string          $type    'success', 'warning' or 'error'.
         *
         * @return void
         */
        public static function add($lines, string $type = 'success'): void
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since 2.0.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Print and discard whatever is waiting.
         *
         * @since 2.0.0
         * @return void
         */
        public static function render(): void
        {
        }
    }
    /**
     * Class Preset
     *
     * ONE DEFINITION, so a future button on the settings screen and the WP-CLI command
     * cannot drift. See docs/_Roadmap/from-tivnet-2026-10.md, section 1, for why each
     * setting is in or out.
     *
     * ADDITIVE ONLY. A preset switches things on and adds to lists. It never turns
     * anything off, never removes a list entry, and never overwrites a choice the site
     * already made - so applying it to a configured site cannot undo that site's own
     * decisions.
     *
     * NEVER IN ANY PRESET: the secret login (it needs a per-site address, and locks out
     * whoever does not know it) and PHP settings (host-specific).
     *
     * @since 2.1.0
     */
    class Preset
    {
        /**
         * Safe for any site, including a shop we know nothing about.
         *
         * Only rules with no known false-positive story: nothing a payment provider,
         * a shipping callback, Jetpack or a remote editor depends on.
         *
         * @since 2.1.0
         * @var string
         */
        public const RECOMMENDED = 'recommended';
        /**
         * Recommended, plus what our own servers run.
         *
         * Each addition breaks something on SOME site - the reason is next to it - and
         * is only safe where it is known that nothing on the site needs what it blocks.
         *
         * @since 2.1.0
         * @var string
         */
        public const STRICT = 'strict';
        /**
         * The preset names.
         *
         * @since 2.1.0
         * @return string[]
         */
        public static function names(): array
        {
        }
        /**
         * The settings in a preset.
         *
         * Lists are given as arrays of entries whatever the field type: the applier
         * merges them into what is stored, and joins them for a textarea.
         *
         * @since 2.1.0
         *
         * @param string $name Preset name.
         *
         * @return array<string, string|string[]> Setting name, as "config list" shows it => value.
         */
        public static function values(string $name): array
        {
        }
    }
    /**
     * Class PresetCLI
     *
     * Apply a named set of settings {@see Preset}, through the same write path as
     * "wp tiv-wooat config set".
     *
     * @since 2.1.0
     */
    class PresetCLI
    {
        /**
         * Apply a preset: switch its settings on and add its list entries.
         *
         * Additive only. Nothing is switched off, no list entry is removed, and a
         * choice the site already made is kept. Prints every setting it would touch
         * first; with --dry-run that is all it does.
         *
         * ## OPTIONS
         *
         * <name>
         * : Which preset. "recommended" is safe for any site. "strict" adds rules that
         * break something on some sites - read "wp tiv-wooat preset strict --dry-run"
         * first.
         * ---
         * options:
         *   - recommended
         *   - strict
         * ---
         *
         * [--dry-run]
         * : Show what would change, and change nothing.
         *
         * ## EXAMPLES
         *
         *     wp tiv-wooat preset recommended --dry-run
         *     wp tiv-wooat preset recommended
         *
         * @since 2.1.0
         *
         * @param string[] $args       Positional arguments.
         * @param string[] $assoc_args Associative arguments.
         *
         * @return void
         */
        public function __invoke($args, $assoc_args = array()): void
        {
        }
        /**
         * What applying one preset value to one setting would store.
         *
         * @since 2.1.0
         *
         * @param array           $field   Field definition.
         * @param mixed           $current Stored value.
         * @param string|string[] $wanted  Preset value.
         *
         * @return array{value: mixed, note: string} Value null means "do not write";
         *                                           the note then says why, or is empty
         *                                           when it is already as wanted.
         */
        protected static function plan(array $field, $current, $wanted): array
        {
        }
        /**
         * One row of the output table.
         *
         * @since 2.1.0
         *
         * @param string $setting Setting name.
         * @param string $now     Current value.
         * @param string $to      Value to store.
         * @param string $action  What happens.
         *
         * @return array<string, string>
         */
        protected static function row(string $setting, string $now, string $to, string $action): array
        {
        }
        /**
         * Register the command.
         *
         * @since 2.1.0
         * @return void
         */
        public static function register(): void
        {
        }
    }
    /**
     * Class Prose
     *
     * The markup helpers for settings copy, in one place because they are needed on
     * both sides of the module/section line. They grew up inside ApacheHardening,
     * which was fine while that module was the only thing on the page writing long
     * explanations; it stopped being fine when a SECTION had to build a collapsed
     * block of its own {@see \TIV_WOOAT\Settings\Sections\AbstractSectionHTAccess::overview()}
     * and the only implementation was protected on a module it must not depend on.
     *
     * No state, no instances: this is a namespace for three functions.
     *
     * @since 2.0.0
     */
    final class Prose
    {
        /**
         * Convert an array of lines to <br>-separated, filtered markup.
         *
         * @since 2.0.0
         *
         * @param string|string[] $content String or array of strings.
         *
         * @return string
         */
        public static function to_multiline($content): string
        {
        }
        /**
         * Secondary text, rendered smaller and dimmer than the description above it.
         *
         * @since 2.0.0 Moved here from ApacheHardening.
         *
         * @param string|string[] $content Body lines.
         *
         * @return string
         */
        public static function comment($content): string
        {
        }
        /**
         * An advisory notice, rendered under a field.
         *
         * Detection advises, it never decides. Nothing that produces one of these
         * changes a default, pre-checks a box or blocks a save: the site owner knows
         * their own setup better than our guess does.
         *
         * The ONE exception is a control that cannot work at all - a checkbox whose
         * constant is already decided in wp-config, say. Greying that out is not
         * overriding the owner's judgement, it is declining to pretend. See
         * {@see \TIV_WOOAT\Modules\AbstractModule::setting_conflict()}.
         *
         * @since 2.0.0 Moved here from ApacheHardening.
         *
         * @param string $text Notice text.
         *
         * @return string
         */
        public static function advisory(string $text): string
        {
        }
        /**
         * A collapsed block of secondary text, closed until the reader opens it.
         *
         * WHY THIS EXISTS. Measured 2026-08-27: the Security screen carries 6,008 words
         * across 37 rows, about half an hour of reading, and WooCommerce renders every
         * word of it expanded. Nobody reads thirty minutes of settings prose, so in
         * practice they read NONE of it - and the warnings, which are the part that
         * stops somebody breaking their own checkout, are buried mid-paragraph between
         * explanations of how scanners work.
         *
         * The split is by JOB, not by length. What this setting does, and what it
         * breaks, stays visible: that is what the person deciding needs in front of
         * them. Why the attack exists, what it costs, how it was measured - that is
         * education, and it belongs one click away.
         *
         * <details> rather than JavaScript. No script to enqueue, no dependency on
         * WooCommerce's own JS, keyboard accessible for free, and it degrades to plain
         * visible text in anything that does not support it. Verified against
         * wp_kses_post(), which to_multiline() applies: details, summary, their class
         * attributes and nested markup all pass through unchanged.
         *
         * ONE array element, deliberately. A description array is joined with <br>, so
         * an opening tag in one element and its closing tag in another would put a line
         * break inside the container and, worse, invite an unbalanced block the day
         * somebody reorders the array.
         *
         * @since 2.0.0 Moved here from ApacheHardening.
         *
         * @param string   $label Summary line. Plain text.
         * @param string[] $lines Body lines, joined the same way as a description.
         *
         * @return string Empty when there is nothing to hide.
         */
        public static function more(string $label, array $lines): string
        {
        }
    }
}
namespace TIV_WOOAT\Settings\Sections {
    /**
     * Class AbstractSection
     *
     * @since 1.0.0
     */
    abstract class AbstractSection
    {
        /**
         * ID.
         *
         * @since 1.0.0
         * @var string
         */
        protected $id = '';
        /**
         * Getter.
         *
         * @since 1.0.0
         * @return string
         */
        public function get_id()
        {
        }
        /**
         * Setter.
         *
         * @since 1.0.0
         *
         * @param string $id
         */
        public function set_id($id)
        {
        }
        /**
         * Title.
         *
         * @since 1.0.0
         * @var string
         */
        protected $title = '';
        /**
         * Getter.
         *
         * @since 1.0.0
         * @return string
         */
        public function get_title()
        {
        }
        /**
         * Setter.
         *
         * @since 1.0.0
         *
         * @param string $title      Title.
         * @param bool   $has_prefix If true, prefix with the plugin info string.
         */
        public function set_title($title, $has_prefix = true)
        {
        }
        /**
         * Description.
         *
         * @since 1.0.0
         * @var string
         */
        protected $desc = '';
        /**
         * Getter.
         *
         * @since 1.0.0
         * @return string
         */
        public function get_desc()
        {
        }
        /**
         * Setter.
         *
         * @since 1.0.0
         *
         * @param string|string[] $desc Description.
         */
        public function set_desc($desc)
        {
        }
        /**
         * Section.
         *
         * @since 1.0.0
         *
         * @param array $settings The "All Settings" array.
         *
         * @return array
         */
        public function section(array $settings)
        {
        }
        /**
         * Make the section start array.
         *
         * @since 1.0.0
         * @return array
         */
        protected function get_start()
        {
        }
        /**
         * Add fields to section.
         *
         * @since 1.0.0
         *
         * @param array $settings The "All Settings" array (reference).
         */
        protected function add_fields(&$settings)
        {
        }
        /**
         * Make the section end array.
         *
         * @since 1.0.0
         * @return array
         */
        public function get_end()
        {
        }
        /**
         * Multiple get_setting_fields().
         *
         * @since 1.3.0
         * @since 1.7.0 Moved to AbstractSection.
         * @return array[]
         */
        public static function get_multi_setting_fields()
        {
        }
    }
    /**
     * Class AbstractSectionHTAccess
     *
     * @since 1.3.0
     */
    abstract class AbstractSectionHTAccess extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.3.0
         * @var string
         */
        const ID = '';
        /**
         * Get the server software name.
         *
         * @since 1.9.5
         * @return string
         */
        private static function get_server_software()
        {
        }
        /**
         * An inline admin notice.
         *
         * @since 2.0.0
         *
         * @param string $type    'warning', 'error' or 'info'.
         * @param string $message Body, may contain markup.
         *
         * @return string
         */
        protected static function notice(string $type, string $message): string
        {
        }
        /**
         * Problems worth interrupting the reader for. Nothing else.
         *
         * WHAT THIS USED TO SAY, AND WHY IT NO LONGER DOES. Until 2026-09-08 it also
         * printed the managed file path and the list of blocks in the file, on every
         * page load. Both were constants competing for attention with the two notices
         * below, which are the lines that actually change what somebody does.
         *
         * - The PATH moved into the recovery sentence, which is the only thing that
         *   ever needed it. Read there, it arrives at the moment it means something.
         * - The BLOCK LIST moved to WooCommerce > Status {@see \TIV_WOOAT\Admin\StatusReport}.
         *   Going through the scenarios one by one, it turned out to answer none of
         *   them for a site owner: a failed write is already reported below, an
         *   orphaned block is swept on the next save, and "is my file in step with my
         *   settings" needs a comparison this list did not do. Its one real use was
         *   support, and a Status Report row can be copied as text.
         *
         * What is left is conditional by design: on a healthy site this returns an
         * empty string.
         *
         * @since 2.0.0
         * @since 2.0.0 Only the exceptions.
         *
         * @return string
         */
        protected static function status_panel(): string
        {
        }
        /**
         * Would we write anything that needs mod_rewrite, as the settings stand now?
         *
         * ASKED OF THE GENERATOR RATHER THAN LISTED HERE. A hand-kept list of "the
         * rewrite settings" is a list that drifts: a block converted from mod_rewrite to
         * authz, or a new one added, would leave this warning firing for a setting that
         * no longer needs the module, or silent for one that does. Building the blocks
         * and looking for the guard cannot go out of step with what is actually written,
         * because it IS what is actually written.
         *
         * No disk access - build_blocks() is string work over the options table.
         *
         * Deliberately not narrowed to the current tab. The two site-wide notices beside
         * this one - the file cannot be written, the file has directives of its own -
         * are not narrowed either, and for the same reason: they describe the server,
         * not the screen, and an admin reading either tab is better off knowing.
         *
         * @since 2.0.0
         * @return bool
         */
        protected static function rewrite_rules_in_play(): bool
        {
        }
        /**
         * How this tab's settings can go wrong, as the opening clause of the recovery.
         *
         * Security's answer is the default because that is the tab the sentence was
         * written for. Performance overrides it: a setting there cannot lock anybody
         * out while working correctly, which is the whole reason that tab has no
         * access gate, and claiming otherwise makes the warning read as boilerplate.
         *
         * @since 2.0.0
         * @return string
         */
        protected function recovery_condition(): string
        {
        }
        /**
         * The way back in, for somebody who cannot reach wp-admin any more.
         *
         * THE ONE LINE THAT MUST BE READ BEFORE IT IS NEEDED. After the save that
         * breaks the site there is no WordPress left to read it in, so it is visible
         * rather than behind a disclosure, and it carries the path rather than
         * pointing at a line further up the page.
         *
         * IT NO LONGER REPEATS THE PROCEDURE, since 2.0.0. The steps cannot be used
         * from this page - when they are needed, this page is what has become
         * unreachable - so their only value here was rehearsal, and they now live where
         * they can actually be read: at the top of the file itself
         * {@see Writer::recovery_text()}. Keeping a second copy
         * here would be two wordings of one instruction, drifting apart.
         *
         * What is left does the one thing the file cannot do for itself: it tells the
         * reader, on an ordinary day, that the file has the answer in it.
         *
         * No mention of WP-CLI: anyone who can use these settings can reach the file
         * some other way, and anyone who cannot should not be using them at all.
         *
         * @since 2.0.0
         *
         * @param string $condition Opening clause from {@see recovery_condition()}.
         *
         * @return string
         */
        protected static function recovery_notice(string $condition): string
        {
        }
        /**
         * Constructor.
         *
         * @since 1.3.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * The fields are collected into a local array FIRST, then the overview is built
         * from them and put in front. That order is the whole point: the index counts
         * what the page actually renders, so it follows a setting being added, removed,
         * hidden behind a flag, or suppressed because the server is not Apache, without
         * anyone maintaining a total.
         *
         * @since 1.3.0
         * @since 2.0.0 Prepends the overview.
         *
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
        /**
         * The collapsed index of everything on the tab, as a group heading.
         *
         * BUILT BY THE SECTION, NOT BY A MODULE, and that is the reason this method
         * exists at all. It began inside ApacheHardening, where it could only ever see
         * that module's own rows - so on Security it counted 33 of the 36 settings on
         * the page and silently omitted three, one of which renders ABOVE it. A module
         * cannot see its neighbours; the section is the only object that knows what the
         * whole tab contains.
         *
         * WHY IT IS COLLAPSED. This exists because the page is long, so it must not add
         * to the length: shut, it is one line. The count is in the heading rather than
         * inside the fold, because "8 of 36" is the one fact worth having without
         * clicking - the list underneath is for navigating and reviewing, which are
         * deliberate acts.
         *
         * SAVED STATE, NOT LIVE STATE, and it says so. Ticking a box does not move these
         * marks until the page is saved. The alternative was a script to sync them, which
         * is a new asset on a screen that has none of its own; a line of text is cheaper
         * and cannot break.
         *
         * Anchors cost nothing: WooCommerce renders every input with id="<option key>",
         * which is the same string this walks, so the links point at markup that exists
         * whether or not this method does. Verified that a nested <ul>, its class, a
         * fragment href and a dashicon all survive wp_kses_post() byte-identical - which
         * is also why there is no CSS here. A nested list indents on its own, and this
         * plugin ships no admin stylesheet.
         *
         * The one link that may not land precisely is a multiselect: select2 hides the
         * original <select>, and browsers do not reliably scroll to a hidden element. It
         * jumps to the right area, which is what the reader wanted.
         *
         * @since 2.0.0
         *
         * @param array $fields Every field the section is about to render.
         *
         * @return array Two settings entries - a sectionend and a title - or none.
         */
        protected function overview(array $fields): array
        {
        }
        /**
         * Sort the fields of a tab into the headings they render under.
         *
         * A field that arrives before any heading is kept in a group with no title,
         * listed at the top level rather than dropped. Dropping it is exactly the bug
         * this whole method was written to fix, and it would come back the moment a
         * section added a field without a heading over it.
         *
         * @since 2.0.0
         *
         * @param array $fields Every field the section is about to render.
         *
         * @return array[] Each entry has 'title', 'items' and 'on'.
         */
        protected static function overview_groups(array $fields): array
        {
        }
        /**
         * Is a stored setting in use?
         *
         * "In use" rather than "on", because most of these are not checkboxes. A filled
         * textarea and a chosen dropdown value are both a decision the owner made, and
         * both change what is written to the file; an empty one is the same as unticked.
         *
         * Read with the field's OWN default, which is what WooCommerce renders the input
         * with, so a mark can never disagree with the control it points at. Verified
         * 2026-09-07 that no field on either tab ships with a value: the marks all start
         * empty, as they should on an install that has changed nothing.
         *
         * @since 2.0.0
         *
         * @param array $field One assembled settings field.
         *
         * @return bool
         */
        protected static function field_is_in_use(array $field): bool
        {
        }
        /**
         * The index itself: one entry per heading, its settings indented under it.
         *
         * @since 2.0.0
         *
         * @param array $groups Built by {@see AbstractSectionHTAccess::overview_groups()}.
         *
         * @return string
         */
        protected static function overview_list(array $groups): string
        {
        }
        /**
         * A heading between groups of fields inside one section.
         *
         * Same shape the modules use for their own group headings: close the open
         * WooCommerce group, open a new one. Needed here because these tabs now draw
         * fields from several modules, and without a heading the last module's rows
         * appear to belong to the previous module's final group.
         *
         * @since 2.0.0
         *
         * @param array           $settings The "All Settings" array (reference).
         * @param string          $id       Unique id suffix.
         * @param string          $title    Heading text.
         * @param string|string[] $desc     Optional description.
         *
         * @return void
         */
        protected function add_heading(&$settings, string $id, string $title, $desc = '')
        {
        }
        /**
         * Fields that work on ANY webserver.
         *
         * Added before the server-side ones and never suppressed. Empty by default, so
         * a section that is purely .htaccess behaves exactly as it did before.
         *
         * @since 2.0.0
         *
         * @param array $settings The "All Settings" array (reference).
         *
         * @return void
         */
        protected function add_universal_fields(&$settings)
        {
        }
        /**
         * Fields that need a webserver which reads .htaccess.
         *
         * @since 2.0.0
         *
         * @param array $settings The "All Settings" array (reference).
         *
         * @return void
         */
        protected function add_server_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionDevelopment
     *
     * @since 1.0.0
     */
    class SectionDevelopment extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.0.0
         * @var string
         */
        const ID = 'Development';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * @since 1.0.0
         *
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionEmail
     *
     * @since 1.0.0
     */
    class SectionEmail extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.0.0
         * @var string
         */
        public const ID = 'email';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * @since 1.0.0
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionEmailIntro
     *
     * @since 1.7.0
     */
    class SectionEmailIntro extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.7.0
         * @var string
         */
        public const ID = 'email_intro';
        /**
         * Constructor.
         *
         * @since 1.7.0
         */
        public function __construct()
        {
        }
    }
    /**
     * Class SectionEmailTweaks
     *
     * @since 1.7.0
     */
    class SectionEmailTweaks extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.7.0
         * @var string
         */
        public const ID = 'email_tweaks';
        /**
         * Constructor.
         *
         * @since 1.7.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * @since 1.7.0
         *
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionGeneral
     *
     * @since 1.0.0
     */
    class SectionGeneral extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.0.0
         * @var string
         */
        const ID = 'General';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * @since 1.0.0
         *
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionGeolocation
     *
     * @since 1.0.0
     */
    class SectionGeolocation extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.0.0
         * @var string
         */
        const ID = 'Geolocation';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * @since 1.0.0
         *
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionIntro
     *
     * @since 1.0.0
     */
    class SectionIntro extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.0.0
         * @var string
         */
        const ID = 'intro';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
    }
    /**
     * Class SectionMaintenance
     *
     * @since 1.0.0
     */
    class SectionMaintenance extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.0.0
         * @var string
         */
        const ID = 'Maintenance';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * @since 1.0.0
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionPerformance
     *
     * The other half of the 2.0.0 reorganisation. Everything that makes the site
     * faster or cheaper to run, gathered from four tabs that were named after the
     * mechanism ("ModExpires", "PHP Settings") or after nothing in particular
     * ("Frontend", "Development").
     *
     * Deliberately NOT gated behind an access confirmation, unlike Security. That
     * gate exists for settings which can lock you out of your own admin WHILE
     * WORKING CORRECTLY - a hidden login page, a denied index.php. Setting a cache
     * lifetime is not that, and putting a scary confirmation in front of it would
     * undo the whole point of naming a tab "Performance".
     *
     * TWO SETTINGS WENT BACK to Development/Debug on 2026-09-07, after the reshuffle
     * had already landed. What the tab is CALLED changes how its contents are read,
     * and both of these read wrong under a heading about speed:
     *
     * - "Disable Analytics cache?" switches a cache OFF. Its only possible effect on
     *   a live site is a slower admin. It exists so a report shows uncached figures
     *   while somebody investigates a discrepancy.
     * - "Disable cron?" says in its own description that it is for a development or
     *   local copy. On a production shop, WP-Cron off without a system cron in its
     *   place stops scheduled posts, Woo scheduled actions and the mail they send.
     *   Offered as a speed tip, it is an invitation to break order emails quietly.
     *
     * "Disable heartbeats?" was weighed with them and stayed: its description also
     * mentions debugging, but heartbeat is a steady stream of admin-ajax requests and
     * turning it off on a busy shop is a real saving.
     *
     * AND "DISABLE ANALYTICS?" WAS REMOVED OUTRIGHT, same day. It applied the
     * `woocommerce_admin_disabled` filter, which WooCommerce 11.1 still honours but
     * now reads through a method called `is_analytics_disabled_by_legacy_filters()`.
     * Analytics has since become a registered feature with its own checkbox under
     * WooCommerce > Settings > Advanced > Features, backed by the option
     * `woocommerce_analytics_enabled`. Ours had become a worse duplicate of it:
     *
     * - it also switched off remote inbox notifications, which our copy never said;
     * - it GREYED OUT core's own checkbox (FeaturesController, "WooCommerce Admin has
     *   been disabled") with nothing on that screen naming this plugin as the cause;
     * - its description still pointed at "the new navigation", a WooCommerce feature
     *   that no longer exists in 11.1.
     *
     * Removing the field alone would NOT have removed the behaviour: ModulesController
     * globs the module folder and hooks anything whose value is set, without asking a
     * section. The class file had to go, or the filter would have stayed live with no
     * switch anywhere. Measured, not assumed.
     *
     * Nothing here was renamed, only moved. Option keys come from the module class
     * name, so every stored value survives.
     *
     * @since 2.0.0
     */
    class SectionPerformance extends \TIV_WOOAT\Settings\Sections\AbstractSectionHTAccess
    {
        /**
         * Section ID.
         *
         * @since 2.0.0
         * @var string
         */
        const ID = 'performance';
        /**
         * Constructor.
         *
         * @since 2.0.0
         */
        public function __construct()
        {
        }
        /**
         * How things go wrong on THIS tab.
         *
         * Not "locks you out", which is Security's failure and the reason that tab has
         * a gate. Nothing here can shut you out of your own admin while working as
         * intended; what it can do is produce config the server rejects, and a server
         * that will not start its config serves nothing at all.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        protected function recovery_condition(): string
        {
        }
        /**
         * Fields that work on any webserver.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        protected function add_universal_fields(&$settings)
        {
        }
        /**
         * Fields that need a webserver which reads .htaccess.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        protected function add_server_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionPostsPages
     *
     * @since 1.0.0
     */
    class SectionPostsPages extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.0.0
         * @var string
         */
        const ID = 'PostsPages';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * @since 1.0.0
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionEmailTweaks
     *
     * @since 1.7.0
     */
    class SectionSMTP extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.7.0
         * @var string
         */
        public const ID = 'smtp';
        /**
         * Constructor.
         *
         * @since 1.7.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * @since 1.7.0
         *
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionSecurity
     *
     * Named for what somebody wants, not for the mechanism that provides it. Before
     * 2.0.0 this tab held a single checkbox while the real protections lived under
     * "Apache Hardening" and "PHP Settings" - names that tell a shop owner nothing
     * and actively put off the ones who need them most.
     *
     * Nothing here was renamed, only moved: option keys are built from the module
     * CLASS name, never from the section, so every stored value survives.
     *
     * @since 1.0.0
     * @since 2.0.0 Absorbed Apache Hardening and the error-display PHP settings.
     */
    class SectionSecurity extends \TIV_WOOAT\Settings\Sections\AbstractSectionHTAccess
    {
        /**
         * Section ID.
         *
         * @since 1.0.0
         * @var string
         */
        const ID = 'security';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Fields that work on any webserver.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        protected function add_universal_fields(&$settings)
        {
        }
        /**
         * Fields that need a webserver which reads .htaccess.
         *
         * @since 2.0.0
         * @inheritDoc
         */
        protected function add_server_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionWC
     *
     * @since 1.0.0
     */
    class SectionWC extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.0.0
         * @var string
         */
        const ID = 'WooCommerce';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * @since 1.0.0
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
    }
    /**
     * Class SectionWCS
     *
     * @since 1.0.0
     */
    class SectionWCS extends \TIV_WOOAT\Settings\Sections\AbstractSection
    {
        /**
         * Section ID.
         *
         * @since 1.0.0
         * @var string
         */
        const ID = 'WCS';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add fields to the section.
         *
         * @since 1.0.0
         * @param array $settings The "All Settings" array.
         */
        protected function add_fields(&$settings)
        {
        }
    }
}
namespace TIV_WOOAT\Settings {
    /**
     * Class SettingsController
     *
     * @since 1.0.0
     */
    class SettingsController extends \TIV_WOOAT\Abstracts\Hookable
    {
        /**
         * Options table keys prefix.
         *
         * @since 1.0.0
         * @var string
         */
        public const OPTIONS_PREFIX = 'tiv_wooat_';
        /**
         * Subfolder in the uploads directory where we save the settings.
         *
         * @since 1.0.0
         * @var string
         */
        protected const SUBFOLDER_SETTINGS = 'tiv_wooat';
        /**
         * File extension for saved settings.
         *
         * @since 1.0.0
         * @var string
         */
        public const SAVE_SETTINGS_EXT = '.json';
        /**
         * Make option key by adding prefix.
         *
         * @since 1.0.0
         *
         * @param string $option Name of the option.
         *
         * @return string
         */
        public static function make_option_key($option)
        {
        }
        /**
         * Get option helper.
         *
         * @since 1.0.0
         *
         * @param string $option        Name of option to retrieve. Expected to not be SQL-escaped.
         * @param mixed  $default_value Optional. Default value to return if the option does not exist.
         *
         * @return bool|mixed
         */
        protected static function get_option($option, $default_value = false)
        {
        }
        /**
         * Return true if a setting is 'on'.
         *
         * @since 1.0.0
         *
         * @param string $setting_id Setting ID
         *
         * @return bool
         */
        protected static function is_on($setting_id)
        {
        }
        /**
         * Return true if a text input setting has a non-empty value.
         *
         * @since 1.0.0
         *
         * @param string $setting_id Setting ID
         *
         * @return bool
         */
        protected static function is_option_set($setting_id)
        {
        }
        /**
         * Return true if a setting has a valid email value.
         *
         * @since 1.0.0
         *
         * @param string $setting_id Setting ID
         *
         * @return bool
         */
        protected static function option_is_valid_email($setting_id)
        {
        }
        /**
         * Return true if a setting has a valid non-default value.
         *
         * @since 1.0.0
         *
         * @param string $setting_id   Setting ID
         * @param string $setting_type Setting ID
         *
         * @return bool
         */
        public static function is_set($setting_id, $setting_type)
        {
        }
        /**
         * Returns the settings page url.
         *
         * @since 1.0.0
         *
         * @return string
         */
        public static function page_url()
        {
        }
        /**
         * Redirect to the settings page.
         *
         * @since 1.0.0
         *
         * @return void
         */
        public static function redirect_to_settings_page()
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since 1.0.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Send the pre-2.0.0 sub-tab addresses to wherever their settings went.
         *
         * The old slugs are in bookmarks, in support replies and in our own docs. A
         * silent empty screen would look like the settings had been deleted, which is
         * precisely the fear a major reorganisation creates.
         *
         * The request is not read here. WooCommerce has already read it: on every
         * settings-page request WC_Admin_Menus::save_settings() (wp_loaded) sets the
         * $current_tab and $current_section globals from it, and current_screen fires
         * well after that. A bookmark cannot carry a nonce, so reading $_GET directly
         * would have meant suppressing the nonce check rather than satisfying it.
         *
         * @since 2.0.0
         * @since 2.1.0 Reads WooCommerce's globals and the screen, not $_GET.
         *
         * @param \WP_Screen $screen The current screen.
         *
         * @return void
         */
        public static function redirect_retired_sections($screen)
        {
        }
        /**
         * Add settings page.
         *
         * @since 1.0.0
         *
         * @param array $settings The "All Settings" array.
         *
         * @return array
         */
        public function filter__woocommerce_get_settings_pages($settings)
        {
        }
        /**
         * Adds the settings, docs and support links to the plugin screen.
         *
         * @since 1.0.0
         *
         * @param string[] $links The plugin's links displayed on the Plugins screen.
         *
         * @return string[]
         */
        public function filter__plugin_action_links($links)
        {
        }
        /**
         * Path to save settings WOOAT.
         *
         * @since 1.0.0
         * @return string
         */
        public static function folder_save_settings()
        {
        }
        /**
         * Path to save settings WOOAT - relative to the site root.
         *
         * @since 1.0.0
         * @return string
         */
        /**
         * Keep the saved settings out of the webserver's reach.
         *
         * This folder lives under uploads, which is served like any other folder: without
         * these two files the .json backups are a public download, and a directory
         * listing hands over their names as well. Written on every call rather than only
         * at creation, so an install that predates this gets repaired too.
         *
         * Deliberately no "Options -Indexes": Require already refuses the listing, and
         * Options needs an AllowOverride many hosts do not grant, which would turn a
         * guard into a 500. If the Require lines are themselves refused the damage is
         * confined to this one folder, and the failure direction is still "unreachable".
         *
         * @since 2.0.0
         *
         * @param string $folder Absolute path, trailing slash included.
         *
         * @return void
         */
        protected static function protect_save_folder(string $folder): void
        {
        }
        /**
         * Relative path, for display.
         *
         * @since 1.0.0
         * @return string
         */
        public static function folder_save_settings_relative()
        {
        }
        /**
         * Method get_all_options.
         *
         * @since 1.0.0
         *
         * @param string $output Optional. Any of ARRAY_A | ARRAY_N | OBJECT | OBJECT_K constants.
         *
         * @return array|array[]|\stdClass[]|null
         */
        public static function get_all_options($output = OBJECT)
        {
        }
    }
    /**
     * Class Tab
     *
     * @since 1.0.0
     */
    class SettingsPage extends \WC_Settings_Page
    {
        /**
         * Sub-tabs that existed before 2.0.0, and where their contents went.
         *
         * These slugs are in people's bookmarks and in our own documentation, so they
         * are redirected rather than left to render an empty screen.
         *
         * @since 2.0.0
         * @var array<string, string>
         */
        public const RETIRED_SECTIONS = array('apache_hardening' => \TIV_WOOAT\Settings\Sections\SectionSecurity::ID, 'php_settings' => \TIV_WOOAT\Settings\Sections\SectionPerformance::ID, 'mod_expires' => \TIV_WOOAT\Settings\Sections\SectionPerformance::ID, 'frontend' => \TIV_WOOAT\Settings\Sections\SectionPerformance::ID, 'analytics' => \TIV_WOOAT\Settings\Sections\SectionPerformance::ID);
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Get own sections.
         *
         * Two outcome-named tabs first, then the original toolbox. "Security" and
         * "Performance" are what a shop owner is actually looking for; "Apache
         * Hardening", "ModExpires", "PHP Settings" and "Frontend" were named after the
         * mechanism and told them nothing.
         *
         * @since 1.0.0
         * @since 2.0.0 Security and Performance replace four mechanism-named sub-tabs.
         * @return array
         */
        protected function get_own_sections()
        {
        }
        /**
         * Filter to fill in the section settings array.
         *
         * @see   \WC_Settings_Page::get_settings_for_section()
         *
         * @since 1.0.0
         *
         * @param array  $settings   Settings array, each item being an associative array representing a setting.
         * @param string $section_id Section ID.
         *
         * @return array
         */
        public function filter__woocommerce_get_settings($settings, $section_id)
        {
        }
    }
    /**
     * Class UpgradeNotice
     *
     * 2.0.0 reorganised the settings screens. Somebody who knew where their rules
     * were will not find them where they left them, and the worst possible reading
     * of that is "the update wiped my settings". So say plainly what happened.
     *
     * IT USED TO PROMISE that nothing was switched on or off. That promise held while
     * the release only moved things: option keys are built from the module CLASS name,
     * and no class was renamed. On 2026-09-07 one class was DELETED - DisableWCAnalytics,
     * because WooCommerce now ships that switch itself - and the promise stopped being
     * true for anyone who had it ticked. The text changed the same day rather than
     * being left to read as reassurance that was no longer earned.
     *
     * The rule this leaves behind: any release that removes or renames a module must
     * come back to this text. A notice that is wrong about one setting is not trusted
     * about the rest.
     *
     * @since 2.0.0
     */
    class UpgradeNotice extends \TIV_WOOAT\Abstracts\Hookable
    {
        /**
         * Option holding the version whose notice has already been dismissed.
         *
         * @since 2.0.0
         * @var string
         */
        public const OPTION_DISMISSED = 'notice_dismissed_version';
        /**
         * The version whose changes this notice describes.
         *
         * @since 2.0.0
         * @var string
         */
        public const FOR_VERSION = '2.0.0';
        /**
         * Query argument that dismisses the notice.
         *
         * @since 2.0.0
         * @var string
         */
        protected const ARG_DISMISS = 'tiv_wooat_dismiss_notice';
        /**
         * Option key.
         *
         * @since 2.0.0
         * @return string
         */
        protected static function option_key(): string
        {
        }
        /**
         * Should the notice be shown at all?
         *
         * Shown when the installed plugin has reached the version this notice is about
         * and the admin has not dismissed it. A brand-new install never sees it: there
         * is nothing to have moved, and "some settings have moved" would be a lie to
         * somebody who has never used the plugin.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function should_show(): bool
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since 2.0.0
         * @return void
         */
        public function setup_hooks()
        {
        }
        /**
         * Record the dismissal.
         *
         * @since 2.0.0
         * @return void
         */
        public static function maybe_dismiss()
        {
        }
        /**
         * Print the notice.
         *
         * Core notice classes only, never a hardcoded colour: the admin palette varies
         * by the user's chosen colour scheme, and a fixed colour is wrong on some of
         * them.
         *
         * @since 2.0.0
         * @return void
         */
        public static function render()
        {
        }
    }
}
namespace {
    /**
     * Class TIV_WOOAT_Fake_Payment_Gateway.
     *
     * @since 1.0.0
     */
    class TIV_WOOAT_Fake_Payment_Gateway extends \WC_Payment_Gateway
    {
        /**
         * Gateway ID.
         *
         * @since 1.0.0
         * @type string
         */
        public const ID = 'tiv_wooat_fake_gw';
        // Must be lowercase.
        /**
         * Field name.
         *
         * @since 1.0.0
         * @type string
         */
        private const FIELD_SUCCESS_PIN = 'success_pin';
        /**
         * Var field_id_success_pin.
         *
         * @since 1.0.0
         *
         * @var string
         */
        private $field_id_success_pin;
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Input fields for checkout.
         *
         * @since 1.0.0
         * @return void
         */
        public function payment_fields()
        {
        }
        /**
         * Admin settings page.
         *
         * @since 1.0.0
         * @return void
         */
        public function init_form_fields()
        {
        }
        /**
         * Implement process_payment.
         *
         * @since 1.0.0
         *
         * @param $order_id
         *
         * @return array|string[]
         */
        public function process_payment($order_id)
        {
        }
    }
}
namespace {
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedConstantFound -- Standard WP plugin version constant.
    \define('ADMIN_TOOLS_FOR_WOOCOMMERCE_VERSION', '2.1.1');
}