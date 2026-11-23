<?php
/**
 * Generated stub declarations for tiv-globus 1.3.0.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace TIV_GLOBUS\Admin {
    /**
     * Class AdminBarSwitcher
     *
     * @since 1.0.0
     */
    class AdminBarSwitcher
    {
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Admin screens where switching the editing language is meaningful:
         * content edit screens plus the post/term list screens (Quick Edit).
         *
         * @since 1.0.1
         */
        private const SUPPORTED_PAGES = array('post.php', 'post-new.php', 'term.php', 'edit.php', 'edit-tags.php', 'options-general.php');
        /**
         * Whether the current admin screen has content to edit per language.
         *
         * Content/term edit screens and their list screens, plus the WooCommerce
         * settings pages (emails, tax, store address, etc.) whose translatable
         * fields are edited in the active language via this same switcher. Hidden
         * everywhere else (dashboard, WP settings, plugins, etc.) where switching
         * the language would do nothing.
         *
         * @since 1.0.1
         *
         * @return bool
         */
        private static function is_supported_screen(): bool
        {
        }
        /**
         * Add language switcher to the admin bar.
         *
         * Only shown where there is content to edit in a language (see
         * is_supported_screen). Hidden on the dashboard, generic settings, and
         * other screens where switching the language does nothing.
         *
         * @since 1.0.1 Scoped to supported screens (was shown on every admin page).
         *
         * @param \WP_Admin_Bar $wp_admin_bar The admin bar instance.
         */
        public static function add_switcher($wp_admin_bar): void
        {
        }
        /**
         * Print responsive admin-bar CSS.
         *
         * This "Edit in:" switcher (left) and the Admin Language switcher
         * (AdminLocaleSwitcher, right) share the admin bar. WordPress only collapses
         * item labels to icons at <= 782px - and there it hides these non-core nodes
         * entirely (see the whitelist in wp-includes/css/admin-bar.css). Between 783px
         * and the breakpoint below, both text labels are wide enough to overlap, so
         * collapse them to the flag/icon in that range. Only printed where the
         * "Edit in:" node is shown, so the Admin Language label is left intact when it
         * stands alone. Uses the same visually-hidden technique as WP core's mobile
         * rule, so the label stays available to assistive technology.
         *
         * The 960px breakpoint is a safe default; widen it if longer translated labels
         * still overlap.
         *
         * @since 1.0.2
         */
        public static function print_admin_bar_style(): void
        {
        }
        /**
         * Print inline JS that warns about unsaved changes before language switch.
         *
         * Only on actual edit pages (post.php, post-new.php, term.php) — not on
         * list pages like edit-tags.php where AJAX form clears trigger false positives.
         */
        public static function print_dirty_check_script(): void
        {
        }
    }
    /**
     * Class AdminLocaleSwitcher
     *
     * @since 1.0.0
     */
    class AdminLocaleSwitcher
    {
        /**
         * Nonce and admin-post action name.
         */
        private const ACTION = 'tiv_globus_set_user_locale';
        /**
         * Admin-bar parent node id.
         *
         * @since 1.0.1
         */
        private const NODE_ID = 'tiv-globus-admin-locale';
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Build a nonce-protected URL for locale switching.
         *
         * @param string $locale WP locale code (empty string = site default).
         *
         * @return string
         */
        private static function build_url(string $locale): string
        {
        }
        /**
         * Add the "Admin Language" dropdown to the admin bar.
         *
         * Installed WP language packs become child nodes; the current admin locale
         * shows in the parent label and is checkmarked in the list.
         *
         * @since 1.0.1
         *
         * @param \WP_Admin_Bar $wp_admin_bar The admin bar instance.
         */
        public static function add_switcher($wp_admin_bar): void
        {
        }
        /**
         * Add a single locale child node to the admin-bar dropdown.
         *
         * @since 1.0.1
         *
         * @param \WP_Admin_Bar $wp_admin_bar The admin bar instance.
         * @param string        $locale       WP locale code ('' = site default).
         * @param string        $label        Human-readable label (raw, will be escaped).
         * @param bool          $is_current   Whether this is the active locale.
         */
        private static function add_locale_node($wp_admin_bar, string $locale, string $label, bool $is_current): void
        {
        }
        /**
         * Handle the locale switch request.
         */
        public static function handle(): void
        {
        }
    }
    /**
     * Class AdminMenuPage
     *
     * @since 1.0.0
     */
    class AdminMenuPage
    {
        /**
         * Menu slug.
         *
         * @var string
         */
        public const MENU_SLUG = 'tiv-globus';
        /**
         * CSS/JS handle for settings page assets.
         *
         * @var string
         */
        private const ASSET_HANDLE = 'tiv-globus-settings';
        /**
         * Page hook suffix returned by add_menu_page(), used to target enqueue.
         *
         * @var string
         */
        private string $page_hook = '';
        /**
         * Register hooks.
         *
         * @since 1.0.0
         * @return void
         */
        public function setup_hooks(): void
        {
        }
        /**
         * Add the Settings and Support links in front of the plugin's links on the Plugins screen.
         *
         * @since 1.3.0
         *
         * @param string[] $links The plugin's links (Deactivate, etc.).
         *
         * @return string[]
         */
        public function filter_plugin_action_links($links): array
        {
        }
        /**
         * Where this copy's customer asks for help, from the Standard TIV Plugin Updater:
         * WooCommerce.com for the Marketplace copy, the store's support page for a copy bought directly.
         * Empty if the updater is not there or its configuration file is missing or damaged.
         *
         * @since 1.3.0
         *
         * @return string
         */
        private static function url_support(): string
        {
        }
        /**
         * Add the top-level admin menu page.
         *
         * @since 1.0.0
         * @return void
         */
        public function add_menu_page(): void
        {
        }
        /**
         * Enqueue CSS and JS for the settings page only.
         *
         * @since 1.0.0
         * @param string $hook Current admin page hook suffix.
         * @return void
         */
        public function enqueue_assets(string $hook): void
        {
        }
        /**
         * Handle form submission on admin_init.
         *
         * @since 1.0.0
         * @return void
         */
        public function handle_save(): void
        {
        }
        /**
         * Download any WP language packs not yet installed for the configured locales.
         *
         * Mirrors what WP does when the admin changes Settings → General → Site Language.
         *
         * @since 1.0.0
         * @param array<string,string> $locale_variant Map of lang_code => locale (e.g. ['es' => 'es_MX']).
         * @return void
         */
        private function install_language_packs(array $locale_variant): void
        {
        }
        /**
         * Build available flag choices per language code for the flag picker.
         *
         * Only includes language codes that have 2+ distinct flag options.
         *
         * @return array<string, array<array{country: string, label: string}>>
         */
        private static function build_flag_choices(): array
        {
        }
        // ── Render ────────────────────────────────────────────────────────────
        /**
         * Render the settings page.
         *
         * @since 1.0.0
         * @return void
         */
        public function render(): void
        {
        }
    }
    /**
     * Class ClassicEditor
     *
     * @since 1.0.0
     */
    class ClassicEditor
    {
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Language switcher bar + content filtering on edit_form_top.
         *
         * In classic editor, `the_post` action never fires (post loaded via get_post(),
         * not the WP loop), so GutenbergEditor::filter_post_for_editor() doesn't run.
         * This hook fires before title/content/excerpt form fields are rendered.
         *
         * @param \WP_Post $post The post being edited.
         */
        public static function filter_post_on_edit_form_top($post): void
        {
        }
        /**
         * Strip post fields to the editing language for the classic editor.
         *
         * In classic editor, `the_post` action never fires (post loaded via
         * get_post(), not the WP loop), so GutenbergEditor::filter_post_for_editor()
         * doesn't run. We modify the $post object directly before the form fields
         * are rendered.
         *
         * @param \WP_Post $post             The post being edited (modified in place).
         * @param string   $editing_language The language to extract.
         */
        private static function filter_post_for_classic_editor(\WP_Post $post, string $editing_language): void
        {
        }
        /**
         * Merge single-language form data with other languages from DB on classic editor save.
         *
         * @param array $data    Sanitized post data.
         * @param array $postarr Raw POST data.
         *
         * @return array
         *
         * @noinspection ReturnTypeCanBeDeclaredInspection — WP hook callback.
         */
        public static function merge_on_classic_save($data, $postarr)
        {
        }
        /**
         * Merge _menu_item_url per language on nav menu save.
         *
         * WP stores the custom link URL in _menu_item_url postmeta. Without this
         * filter, saving a menu in a non-default language overwrites the URL for
         * all languages. This merges the URL into a delimiter string.
         *
         * @since 1.0.0
         *
         * @param null|bool $check      Return non-null to short-circuit update_metadata().
         * @param int       $object_id  Post (menu item) ID.
         * @param string    $meta_key   Meta key.
         * @param mixed     $meta_value New meta value.
         *
         * @return null|bool Null to proceed normally, true to short-circuit.
         */
        public static function merge_menu_item_url($check, $object_id, $meta_key, $meta_value)
        {
        }
        /**
         * Resolve filtered (single-language) tag names in $_POST['tax_input']
         * back to term IDs before edit_post() processes them.
         *
         * The Classic Editor's tag meta box renders term names after get_term
         * filters extract the current language. On save, these filtered names
         * don't match the raw multilingual DB names, so wp_set_object_terms()
         * would create duplicate terms. This replaces such names with term IDs.
         */
        public static function resolve_tax_input_on_save(): void
        {
        }
        /**
         * Find a term by checking if any language extraction from its multilingual
         * name matches the submitted (filtered) name.
         *
         * @param string $name     The filtered single-language name.
         * @param string $taxonomy The taxonomy.
         * @param \TIV_GLOBUS\Core\Config $config   Config instance.
         *
         * @return int|null Term ID, or null if not found.
         */
        private static function find_multilingual_term_by_filtered_name(string $name, string $taxonomy, \TIV_GLOBUS\Core\Config $config): ?int
        {
        }
    }
    class Controller
    {
        public static function register(): void
        {
        }
    }
    /**
     * Class CustomizerIntegration
     *
     * @since 1.0.0
     */
    class CustomizerIntegration
    {
        /**
         * Register Customizer hooks — call once from App in is_admin() context.
         */
        public static function register(): void
        {
        }
        /**
         * Enqueue the language selector CSS and JS for the Customizer controls panel.
         *
         * The JS builds a dropdown after the ".customize-controls-close" button.
         * Selecting a language reloads customize.php with ?language=xx and ?url=
         * pointing to the language home URL so the preview iframe also switches.
         */
        public static function enqueue_language_selector(): void
        {
        }
        /**
         * Merge a single-language Customizer edit back into the existing multilingual string.
         *
         * When the controls panel shows a filtered (single-language) value and the user
         * edits it, the changeset receives only the edited language's text. This filter
         * reads the raw DB value, replaces the edited language's segment, and stores the
         * full multilingual string so no other language is lost.
         *
         * @param array $data Changeset data: [ $setting_id => [ 'value' => ..., 'type' => ..., ... ] ].
         *
         * @return array
         */
        public static function merge_changeset_data(array $data): array
        {
        }
        // ── Helpers ──────────────────────────────────────────────────────────────
        /**
         * Return true for setting IDs that are never multilingual text.
         *
         * @param string $setting_id Customizer setting ID.
         *
         * @return bool
         */
        private static function is_non_text_setting(string $setting_id): bool
        {
        }
        /**
         * Read the raw (unfiltered) current DB value for a Customizer setting.
         *
         * Uses a direct DB query to bypass option filters so we get the
         * multilingual string, not the already-extracted single-language value.
         *
         * @param string      $setting_id Setting ID.
         * @param string|null $type       'option' or 'theme_mod' (default).
         *
         * @return string|null Raw value or null if not stored.
         */
        private static function get_raw_setting_value(string $setting_id, ?string $type): ?string
        {
        }
        /**
         * Extract all language segments from a multilingual string.
         *
         * @param string $text   Multilingual string.
         * @param \TIV_GLOBUS\Core\Config $config Config instance.
         *
         * @return array<string, string> Language code => text.
         */
        private static function extract_all_languages(string $text, \TIV_GLOBUS\Core\Config $config): array
        {
        }
    }
    /**
     * Class GutenbergAssets
     *
     * @since 1.0.0
     */
    class GutenbergAssets
    {
        /**
         * Script handle.
         */
        private const SCRIPT_HANDLE = 'tiv-globus-language-block';
        /**
         * Register hooks for enqueuing editor assets.
         */
        public static function register(): void
        {
        }
        /**
         * Enqueue block editor scripts and localize configuration.
         */
        public static function enqueue_editor_scripts(): void
        {
        }
        /**
         * Print inline CSS that replaces the dashicon with the editing language flag.
         * Uses admin_head for guaranteed output timing.
         */
        public static function print_flag_icon_style(): void
        {
        }
    }
    /**
     * Class GutenbergBlock
     *
     * @since 1.0.0
     */
    class GutenbergBlock
    {
        /**
         * Block name.
         */
        public const BLOCK_NAME = 'wpglobus/language';
        /**
         * Register the block type.
         */
        public static function register(): void
        {
        }
        /**
         * Server-side render callback.
         *
         * If the block's language attribute matches the current language,
         * render the InnerBlocks content. Otherwise, return empty.
         *
         * @param array  $attributes Block attributes.
         * @param string $content    InnerBlocks content.
         *
         * @return string
         */
        public static function render(array $attributes, string $content): string
        {
        }
        /**
         * Check whether the current post has a wpglobus/language block for a given language.
         *
         * Results are cached per post ID for the duration of the request.
         *
         * @param string $language Language code to look for.
         *
         * @return bool
         */
        private static function post_has_block_for(string $language): bool
        {
        }
    }
    /**
     * Class GutenbergEditor
     *
     * @since 1.0.0
     */
    class GutenbergEditor
    {
        /**
         * The language currently being edited.
         *
         * @var string
         */
        private static $editing_language = '';
        /**
         * Block-editor infrastructure post types whose post_content is structured
         * JSON/HTML, not translatable text. These must never be delimiter-wrapped.
         *
         * @since 1.0.1
         *
         * @var string[]
         */
        private const NON_TRANSLATABLE_POST_TYPES = array('wp_global_styles', 'wp_template', 'wp_template_part', 'wp_navigation', 'wp_font_family', 'wp_font_face');
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Get the current editing language.
         *
         * @return string
         */
        public static function get_editing_language(): string
        {
        }
        /**
         * Cookie name for persisting editing language across admin pages.
         */
        private const ADMIN_COOKIE_NAME = 'tiv_globus_admin_language';
        /**
         * Detect which language is being edited from the request.
         *
         * Priority chain:
         * 1. `$_REQUEST['language']` — present on editor page load (`post.php?language=xx`)
         * 2. Admin language cookie — persists across admin page navigations
         * 3. HTTP Referer — present during REST API saves (browser sends Referer pointing to editor)
         * 4. Default language — fallback
         *
         * @return string
         */
        private static function detect_editing_language(): string
        {
        }
        /**
         * Set the admin language cookie.
         *
         * @param string $language Language code.
         */
        private static function set_admin_language_cookie(string $language): void
        {
        }
        /**
         * Append &language=XX to admin edit post links.
         *
         * Ensures that "Edit" links on admin list tables carry the current editing
         * language so Gutenberg opens in the correct language context.
         *
         * @param string $url The edit post link URL.
         *
         * @return string
         */
        public static function append_language_to_edit_link($url)
        {
        }
        /**
         * Filter post object for the Gutenberg editor.
         *
         * Strips multilingual delimiters and shows only the editing language's content.
         * Only runs on post.php / post-new.php (not on list tables or other admin pages).
         *
         * @param \WP_Post $post The post object.
         */
        public static function filter_post_for_editor($post): void
        {
        }
        /**
         * Merge edited content with other languages on REST API save.
         *
         * Reads the current DB version of the post, extracts each non-editing
         * language's content from it, and merges with the new content.
         *
         * @param \stdClass         $prepared_post Prepared post object.
         * @param \WP_REST_Request  $request       REST request.
         *
         * @return \stdClass
         *
         * @noinspection ReturnTypeCanBeDeclaredInspection — WP hook callback.
         */
        public static function merge_on_save($prepared_post, $request)
        {
        }
        /**
         * Force post-new.php to use the default language.
         *
         * New posts/pages should always be created in the default language first,
         * then translated. Redirect if the admin language cookie is non-default.
         */
        public static function force_default_language_on_create(): void
        {
        }
        /**
         * After post creation: wrap title/content/excerpt with the editing language
         * delimiter when created in a non-default language.
         *
         * Without this, a post created in RU would be stored as plain text,
         * and later merge logic would incorrectly assume it's default-language content.
         *
         * @since 1.0.1 Skip block-editor infrastructure post types (wp_global_styles,
         *             templates, navigation, fonts) whose content is structured data.
         *
         * @param int      $post_id     Post ID.
         * @param \WP_Post $post        Post object.
         * @param bool     $update      Whether this is an update (true) or new post (false).
         * @param \WP_Post $post_before Post object before the update (null for new posts).
         *
         * @noinspection PhpUnusedParameterInspection — signature required by wp_after_insert_post.
         */
        public static function wrap_on_create($post_id, $post, $update, $post_before): void
        {
        }
        /**
         * Filter REST response after save — show only the editing language.
         *
         * @param \WP_REST_Response $response Result to send to the client.
         * @param array             $handler  Route handler data.
         * @param \WP_REST_Request  $request  Request used to generate the response.
         *
         * @return \WP_REST_Response
         *
         * @noinspection ReturnTypeCanBeDeclaredInspection — WP hook callback.
         */
        /**
         * Strip delimiters from any REST response that contains them.
         *
         * Catches third-party endpoints (Yoast available_posts, etc.) that return
         * raw post/term data with delimiters. Extracts the current admin language.
         *
         * @param \WP_REST_Response $response The REST response.
         *
         * @return \WP_REST_Response
         */
        public static function strip_delimiters_from_rest_response($response)
        {
        }
        public static function filter_rest_response_after_save($response, $handler, $request)
        {
        }
        /**
         * Filter autosave/revision REST responses — strip delimiters to editing language.
         *
         * Without this, Gutenberg compares the stripped main post ("Hello")
         * to the raw autosave ("{:en}Hello{:}{:ru}...{:}") and always shows
         * the "more recent autosave" notice.
         *
         * @param \WP_REST_Response $response The response object.
         * @param \WP_Post          $post     The revision post object.
         * @param \WP_REST_Request  $request  The request object.
         *
         * @return \WP_REST_Response
         *
         * @noinspection PhpUnusedParameterInspection — signature required by rest_prepare_revision filter.
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public static function filter_autosave_response($response, $post, $request)
        {
        }
    }
    /**
     * Class SettingsContent
     *
     * @since 1.0.0
     */
    class SettingsContent
    {
        /**
         * Return settings fields in WC Settings API array format.
         *
         * @since 1.0.0
         * @return array[]
         */
        public static function get_fields(): array
        {
        }
    }
    /**
     * Class SettingsSave
     *
     * @since 1.0.0
     */
    class SettingsSave
    {
        /**
         * Process and save settings from POST data.
         *
         * @param array $post POST data (or mock array for testing).
         *
         * @return array{saved: bool, errors: string[]}
         */
        public static function save(array $post): array
        {
        }
        /**
         * Validate settings without saving (for unit testing).
         *
         * @param array $post POST data.
         *
         * @return array{valid: bool, errors: string[], enabled: string[], default: string}
         */
        public static function validate(array $post): array
        {
        }
    }
    /**
     * Class TermEditor
     *
     * @since 1.0.0
     */
    class TermEditor
    {
        /**
         * Cached raw DB term data, keyed by term_id.
         *
         * @var array<int, object>
         */
        private static $cached_raw_terms = array();
        /**
         * Guard against recursion during merge.
         *
         * @var bool
         */
        private static $merging = false;
        /**
         * Whether a merge re-write is in progress.
         *
         * Used by TermSlugAdmin to skip slug caching during the nested
         * wp_update_term() call inside merge_on_save().
         *
         * @return bool
         */
        public static function is_merging(): bool
        {
        }
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Register edited_{taxonomy} hooks for all UI-visible taxonomies.
         * Uses show_ui (not public) to include WC attribute taxonomies (pa_*),
         * which are public:false but show_ui:true.
         */
        public static function register_merge_hooks(): void
        {
        }
        /**
         * Set Config->language to the editing language on term pages.
         */
        public static function set_editing_language(): void
        {
        }
        /**
         * Disable slug field when editing in a non-default language.
         */
        public static function maybe_disable_slug_field(): void
        {
        }
        /**
         * Show a hint below the "Add New ..." heading when editing in a non-default language.
         */
        public static function maybe_warn_non_default_add(): void
        {
        }
        /**
         * On POST with action=editedtag, cache raw DB value before WordPress overwrites.
         */
        public static function cache_term_before_save(): void
        {
        }
        /**
         * Cache raw DB term data before wp_update_term() writes to the database.
         *
         * Passthrough filter on `wp_update_term_data` — caches as side effect.
         * Covers Quick Edit (AJAX) and any save path that bypasses load-edit-tags.php.
         *
         * @noinspection PhpUnusedParameterInspection — signature required by wp_update_term_data filter.
         *
         * @param array  $data     Term data to be updated.
         * @param int    $term_id  Term ID.
         * @param string $taxonomy Taxonomy slug.
         * @param array  $args     Arguments passed to wp_update_term().
         *
         * @return array Unmodified $data.
         */
        public static function cache_term_before_update($data, $term_id, $taxonomy, $args): array
        {
        }
        /**
         * After term creation: wrap name/description with the editing language delimiter
         * when created in a non-default language.
         *
         * Without this, a term created in RU would be stored as plain text,
         * and later merge logic would incorrectly assume it's default-language content.
         *
         * @param int    $term_id  The new term ID.
         * @param int    $tt_id    The term taxonomy ID.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function wrap_on_create(int $term_id, int $tt_id): void
        {
        }
        /**
         * After save: merge the editing language with cached translations.
         *
         * @param int $term_id The term ID.
         */
        public static function merge_on_save(int $term_id): void
        {
        }
        /**
         * Merge a single term field: editing language from new value + other languages from cached DB.
         *
         * Same logic as ClassicEditor::merge_on_classic_save() per field.
         *
         * @param string $new_value    The just-saved single-language value.
         * @param string $db_value     The pre-save raw DB value (with all translations).
         * @param string $editing_lang The language being edited.
         * @param \TIV_GLOBUS\Core\Config $config       Config instance.
         *
         * @return string|null Merged value, or null if no merge needed.
         */
        public static function merge_term_field(string $new_value, string $db_value, string $editing_lang, \TIV_GLOBUS\Core\Config $config): ?string
        {
        }
        /**
         * Reset static state (for testing).
         */
        public static function reset(): void
        {
        }
    }
}
namespace TIV_GLOBUS {
    /**
     * Class App
     *
     * @since 1.0.0
     */
    class App extends \TIV_GLOBUS\Dependencies\TIVWP\AbstractApp implements \TIV_GLOBUS\Dependencies\TIVWP\InterfaceHookable
    {
        /**
         * Alias of instance() for IDE to get the correct pointer to this class and not to abstract.
         *
         * @since 1.0.0
         * @return self
         */
        public static function me(): self
        {
        }
        /**
         * Asset version string for cache busting.
         * Development: time() to bypass cache. Release: TIV_GLOBUS_VERSION.
         *
         * @return string
         */
        public static function asset_version(): string
        {
        }
        /**
         * Setup actions and filters.
         *
         * @since 1.0.0
         * @return void
         */
        public function setup_hooks(): void
        {
        }
        /**
         * Early language detection - runs at plugins_loaded priority -1.
         *
         * @since 1.0.0
         */
        public static function detect_language_early(): void
        {
        }
        /**
         * Main hook registration - runs after all plugins loaded.
         *
         * @since    1.0.0
         * @internal filter.
         */
        public function setup_hooks_after_plugins_loaded(): void
        {
        }
    }
}
namespace TIV_GLOBUS\Compat {
    /**
     * Class LegacyGuard
     *
     * @since 1.1.0
     */
    class LegacyGuard
    {
        /**
         * Whether TIV Globus is standing down in favor of an active WPGlobus.
         *
         * @since 1.1.0
         * @var bool
         */
        private static $standing_down = false;
        /**
         * Decide whether to stand down. Runs early on `plugins_loaded`.
         *
         * @since 1.1.0
         * @return void
         */
        public static function maybe_stand_down(): void
        {
        }
        /**
         * Is TIV Globus standing down? The App checks this before booting.
         *
         * @since 1.1.0
         * @return bool
         */
        public static function is_standing_down(): bool
        {
        }
        /**
         * Notice shown while dormant.
         *
         * @since 1.1.0
         * @return void
         */
        public static function render_notice(): void
        {
        }
    }
}
namespace TIV_GLOBUS\Core {
    /**
     * Class BrowserRedirect
     *
     * @since 1.1.0
     */
    class BrowserRedirect
    {
        /**
         * Cookie that records we have already evaluated this visitor.
         *
         * @since 1.1.0
         * @var string
         */
        public const COOKIE_NAME = 'tiv_globus_visitor_language';
        /**
         * Register the front-end redirect - only when the opt-in setting is on.
         *
         * @since 1.1.0
         * @return void
         */
        public static function register(): void
        {
        }
        /**
         * Redirect the visitor to their preferred language on first visit.
         *
         * @since 1.1.0
         * @return void
         */
        public static function maybe_redirect(): void
        {
        }
        /**
         * Decide which language to redirect to, or null for no redirect.
         *
         * Pure decision, no side effects (unit-tested).
         *
         * @since 1.1.0
         *
         * @param string $accept_language Raw Accept-Language header.
         * @param Config $config          Config instance.
         *
         * @return string|null Target language code, or null.
         */
        public static function decide_target(string $accept_language, \TIV_GLOBUS\Core\Config $config): ?string
        {
        }
        /**
         * Pick the best enabled language from an Accept-Language header.
         *
         * Parses quality values, prefers higher q, then earlier position; matches on
         * the two-letter primary sub-tag.
         *
         * @since 1.1.0
         *
         * @param string   $header  Accept-Language header, e.g. "fr-CH,fr;q=0.9,en;q=0.8".
         * @param string[] $enabled Enabled language codes.
         *
         * @return string|null Matched enabled code, or null.
         */
        public static function match_accept_language(string $header, array $enabled): ?string
        {
        }
        /**
         * Read the visitor cookie (sanitized).
         *
         * @since 1.1.0
         * @return string
         */
        private static function read_cookie(): string
        {
        }
        /**
         * Remember that we have evaluated this visitor.
         *
         * @since 1.1.0
         *
         * @param string $value Language code to store.
         *
         * @return void
         */
        private static function write_cookie(string $value): void
        {
        }
    }
    /**
     * Class Config
     *
     * @since 1.0.0
     */
    class Config
    {
        /**
         * Singleton instance.
         *
         * @var self|null
         */
        private static ?self $instance = null;
        /**
         * Default language code (first in enabled_languages).
         *
         * @var string
         */
        public string $default_language = 'en';
        /**
         * Current language (set at runtime by Router).
         *
         * @var string
         */
        public string $language = 'en';
        /**
         * Ordered list of enabled language codes.
         *
         * @var string[]
         */
        public array $enabled_languages = array('en');
        /**
         * Whether to hide the default language from URLs.
         *
         * @var bool
         */
        public bool $hide_default_language = true;
        /**
         * Locale per language code, e.g. ['en' => 'en_US', 'fr' => 'fr_FR'].
         *
         * @var array<string, string>
         */
        public array $locale = array();
        /**
         * Native language names, e.g. ['en' => 'English', 'fr' => 'Français'].
         *
         * @var array<string, string>
         */
        public array $language_name = array();
        /**
         * English language names, e.g. ['en' => 'English', 'fr' => 'French'].
         *
         * @var array<string, string>
         */
        public array $en_language_name = array();
        /**
         * Per-language flag country code overrides, e.g. ['en' => 'gb', 'es' => 'mx'].
         * Stored in wpglobus_option['flag_override'].
         *
         * @var array<string, string>
         */
        public array $flag_override = array();
        /**
         * Per-language selected locale variant, e.g. ['en' => 'en_GB', 'es' => 'es_MX'].
         * Stored in wpglobus_option['locale_variant'].
         *
         * @var array<string, string>
         */
        public array $locale_variant = array();
        /**
         * Redirect first-time visitors to their preferred browser language.
         * Opt-in, OFF by default. Stored in wpglobus_option['redirect_browser_language'].
         *
         * @var bool
         */
        public bool $redirect_browser_language = false;
        // ── DB option keys (backward-compatible with WPGlobus) ────────────
        private const OPTION_MAIN = 'wpglobus_option';
        private const OPTION_LANGUAGE_NAMES = 'wpglobus_option_language_names';
        private const OPTION_EN_LANGUAGE_NAMES = 'wpglobus_option_en_language_names';
        private const OPTION_LOCALE = 'wpglobus_option_locale';
        /**
         * Get the singleton instance.
         *
         * @param array|null $options Inject option arrays for unit testing (bypasses get_option).
         *
         * @return self
         */
        public static function instance(?array $options = null): self
        {
        }
        /**
         * Reset singleton — for unit tests only.
         */
        public static function reset(): void
        {
        }
        /**
         * Constructor.
         *
         * @param array|null $options If provided, skip get_option and use these arrays directly.
         *                            Keys: 'main', 'language_names', 'en_language_names', 'locale', 'flags'.
         */
        private function __construct(?array $options = null)
        {
        }
        /**
         * Set the current language.
         *
         * @param string $language Two-letter language code.
         */
        public function set_language(string $language): void
        {
        }
        /**
         * Check whether a language code is in the enabled list.
         *
         * @param string $language Two-letter code.
         *
         * @return bool
         */
        public function is_enabled(string $language): bool
        {
        }
        /**
         * Whether the current language is the default language.
         *
         * @since 1.3.0
         *
         * @return bool
         */
        public function is_current_language_default(): bool
        {
        }
        /**
         * Derive a two-letter language code from WordPress's WPLANG option.
         *
         * Uses get_option() directly to avoid any locale filters (including our own).
         * WPLANG is '' on en_US installs (WP convention); '' maps to 'en'.
         * Exceptions map specific locales that would otherwise be ambiguous (e.g. zh_TW → 'tw'
         * rather than 'zh', since LocaleData has separate entries for Simplified and Traditional).
         *
         * @return string Two-letter code, e.g. 'en', 'de', 'fr', 'zh', 'tw'.
         */
        private static function locale_to_code(): string
        {
        }
        /**
         * Decode HTML entities in a language-name map.
         *
         * The free WPGlobus plugin stores several native names as numeric HTML entities
         * (e.g. 'he' => '&#1506;&#1489;&#1512;&#1497;&#1514;'), and those values survive in
         * `wpglobus_option_language_names` when a site migrates to TIV Globus. Every consumer
         * treats the name as plain text - React renders it verbatim, PHP runs it through
         * esc_html() - so the raw entities become visible. Decode once, on read.
         *
         * @param array<string, string> $names Language code => name, possibly entity-encoded.
         *
         * @return array<string, string> Same map with names as plain UTF-8.
         */
        private static function decode_names(array $names): array
        {
        }
        /**
         * Derive flag_override from available environment signals.
         *
         * Priority: WooCommerce store country > WPLANG country part.
         * Returns an override only when the derived country differs from the LanguageMap default.
         *
         * @param string $lang_code  Two-letter language code (e.g. 'en', 'es').
         * @param string $wplang     Full WPLANG value (e.g. 'en_AU', 'es_MX', '').
         * @param string $wc_country WC store country (e.g. 'ca', 'mx', ''). Already lowercase.
         *
         * @return array<string, string> e.g. ['en' => 'au']. Empty if no override needed.
         */
        public static function derive_flag_override(string $lang_code, string $wplang, string $wc_country = ''): array
        {
        }
        /**
         * Load options from DB or injected array.
         *
         * @param array|null $options Injected options for testing.
         */
        private function load_options(?array $options): void
        {
        }
        /**
         * Load from an injected test array.
         *
         * @param array $options Keys: 'main', 'language_names', 'en_language_names', 'locale', 'flags'.
         */
        private function load_from_array(array $options): void
        {
        }
    }
    /**
     * Class CoreOptionFilter
     *
     * @since 1.0.1
     */
    class CoreOptionFilter
    {
        /**
         * Register merge-on-save hooks for WP core string options.
         *
         * @since 1.0.1
         */
        public static function register(): void
        {
        }
        /**
         * Merge a submitted single-language value into the stored multilingual value.
         *
         * @since 1.0.1
         *
         * @param mixed  $value     The new value about to be saved.
         * @param mixed  $old_value The old value (already filtered - not raw).
         * @param string $option    The option name.
         *
         * @return mixed
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function merge_option($value, $old_value, $option)
        {
        }
        /**
         * Decide the value to store, given the submitted value and the raw DB value.
         *
         * Pure (no DB / globals) so it can be unit-tested.
         *
         * Skip-if-unchanged guard: the General Settings form submits every field on
         * every save. In admin the field displays the editing-language extraction
         * (Config::$language is synced to the editing language). If the submitted
         * value matches that display, the user did not touch this field - keep the
         * raw multilingual value so the other languages survive.
         *
         * @since 1.0.1
         *
         * @param string $value        Submitted single-language value.
         * @param string $raw          Raw DB value (all translations).
         * @param string $editing_lang Language being edited.
         * @param Config $config       Config instance.
         *
         * @return string Value to store.
         */
        public static function resolve_value(string $value, string $raw, string $editing_lang, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Read the raw option value from DB, bypassing all filters.
         *
         * @since 1.0.1
         *
         * @param string $option_name The option name.
         *
         * @return string|null Raw value, or null if not found.
         */
        private static function get_raw_option_value(string $option_name): ?string
        {
        }
    }
    /**
     * Class FilterController
     *
     * @since 1.0.0
     */
    class FilterController
    {
        /**
         * Text filters applied in both frontend and admin contexts.
         *
         * @var string[]
         */
        private static $text_filters = array('the_title', 'the_content', 'get_the_excerpt', 'single_post_title', 'single_cat_title', 'single_tag_title', 'single_term_title', 'post_type_archive_title', 'widget_title', 'option_blogname', 'option_blogdescription');
        /**
         * Register text and term filters — safe for both frontend and admin.
         *
         * Called from App unconditionally so admin list tables also show
         * the current language text instead of raw delimiters.
         */
        public static function register_text_filters(): void
        {
        }
        /**
         * Register frontend-only filters (URL localization, locale, slugs).
         *
         * Should be called once from App on the frontend (non-admin).
         */
        public static function register(): void
        {
        }
    }
    /**
     * Class Filters
     *
     * @since 1.0.0
     */
    class Filters
    {
        /**
         * Filter a text string — extract current language.
         *
         * Generic callback for any WordPress hook that passes a string.
         *
         * @param mixed $text Text to filter.
         *
         * @return string
         *
         * @noinspection ReturnTypeCanBeDeclaredInspection — WP hook callback.
         */
        public static function filter_text($text)
        {
        }
        /**
         * Filter the_posts — translate post titles and content for each post in the array.
         *
         * @param \WP_Post[] $posts Array of post objects.
         *
         * @return \WP_Post[]
         */
        public static function filter_the_posts(array $posts): array
        {
        }
        /**
         * Filter a term object — translate name and description.
         *
         * @param mixed $term Term object or array.
         *
         * @return mixed
         */
        public static function filter_get_term($term)
        {
        }
        /**
         * Filter get_terms — translate each term in the array.
         *
         * @param mixed $terms Array of term objects.
         *
         * @return mixed
         */
        public static function filter_get_terms($terms)
        {
        }
        /**
         * Filter wp_setup_nav_menu_item — translate title and URL for display.
         *
         * In admin context (Appearance → Menus), menu item fields contain raw delimiters.
         * This filter extracts the current editing language text for display.
         * On the frontend, it extracts the current language's URL for custom links.
         *
         * @param object $menu_item Menu item object.
         *
         * @return object
         */
        public static function filter_setup_nav_menu_item($menu_item)
        {
        }
        /**
         * Strip multilingual delimiters from wp_mail subject and message.
         *
         * WP core emails (comment notifications, pingbacks, etc.) use raw
         * $post->post_title which bypasses the_title filter. This catches
         * any remaining delimiters before the email is sent.
         *
         * @param array $args wp_mail arguments: to, subject, message, headers, attachments.
         *
         * @return array
         */
        public static function filter_wp_mail(array $args): array
        {
        }
        /**
         * Add per-language sitemap URLs to robots.txt.
         *
         * Appends a Sitemap: line for each non-default language so search engines
         * discover the language-prefixed sitemap indexes.
         *
         * @param string $output The robots.txt output.
         *
         * @return string
         */
        public static function filter_robots_txt($output): string
        {
        }
        /**
         * Whether to skip home_url localization (e.g. during rewrite rule generation).
         *
         * @var bool
         */
        private static bool $skip_home_url = false;
        /**
         * Suspend home_url localization during rewrite rule generation.
         *
         * When WP flushes rewrite rules, it calls home_url() to determine the
         * RewriteBase for .htaccess. If our filter adds a language prefix (e.g. /ru/),
         * the RewriteBase becomes /ru/ instead of /, breaking all non-language URLs.
         *
         * @internal action callback for `generate_rewrite_rules`.
         */
        public static function suspend_home_url_for_rewrite(): void
        {
        }
        /**
         * Re-enable home_url localization after rewrite rules are written.
         *
         * @internal filter callback for `mod_rewrite_rules`.
         *
         * @param string $rules The generated rules (passed through unchanged).
         *
         * @return string
         */
        public static function resume_home_url_after_rewrite($rules)
        {
        }
        /**
         * Filter home_url — add language prefix for non-default languages.
         *
         * @param string $url  The complete home URL.
         * @param string $path Path relative to the home URL.
         *
         * @return string
         */
        public static function filter_home_url($url, $path = ''): string
        {
        }
        /**
         * Filter locale — return the locale matching the current language.
         *
         * @param string $locale Current WordPress locale.
         *
         * @return string
         */
        public static function filter_locale($locale): string
        {
        }
        /**
         * Filter the title/original_title field in each Customizer available-items array.
         *
         * WP's WP_Customize_Nav_Menus::load_available_items_query() and
         * search_available_items_query() copy $post->post_title / $term->name directly
         * into the items array without applying the_title or get_term filters.
         * The hooks customize_nav_menu_available_items and
         * customize_nav_menu_searched_items are the only way to filter these titles.
         *
         * @param array $items Available or searched menu items.
         *
         * @return array
         */
        public static function filter_customizer_available_items($items)
        {
        }
        /**
         * Filter theme_mods — extract current language from all string-valued theme mods.
         *
         * Hooked to `option_theme_mods_{stylesheet}` so it covers every theme option
         * stored as a theme mod (custom footer text, custom tagline, etc.) in a single
         * callback — no per-mod registration needed.
         *
         * @param mixed $mods Theme mods array from the DB.
         *
         * @return mixed
         *
         * @noinspection ReturnTypeCanBeDeclaredInspection — WP hook callback.
         */
        public static function filter_theme_mods($mods)
        {
        }
        /**
         * Output hreflang <link> tags for all enabled languages.
         *
         * Hooked to `wp_head` (priority 1) on the frontend.
         * Outputs one `<link rel="alternate">` per enabled language plus an
         * x-default tag pointing to the default-language URL.
         *
         * URL generation uses the prefix-swap strategy: take the current URL,
         * strip any language prefix, then add each language's prefix. Translated
         * slugs (Phase 2) would require per-language permalink generation.
         */
        public static function output_hreflang(): void
        {
        }
        /**
         * Output hreflang tags for a term archive using get_term_link() per language.
         *
         * @since 1.3.0
         *
         * @param \WP_Term $term   Queried term.
         * @param Config   $config Config instance.
         */
        private static function output_hreflang_for_term(\WP_Term $term, \TIV_GLOBUS\Core\Config $config): void
        {
        }
        /**
         * Get the post ID for hreflang entity-based output.
         *
         * @return int Post ID, or 0 if not applicable.
         */
        private static function get_hreflang_entity_id(): int
        {
        }
        /**
         * Output hreflang tags using get_permalink() per language (for translated slugs).
         *
         * @param int    $post_id Post ID.
         * @param Config $config  Config instance.
         */
        private static function output_hreflang_for_entity(int $post_id, \TIV_GLOBUS\Core\Config $config): void
        {
        }
        /**
         * Output hreflang tags using URL manipulation (for archives, home, etc.).
         *
         * @param Config $config Config instance.
         */
        private static function output_hreflang_for_url(\TIV_GLOBUS\Core\Config $config): void
        {
        }
        /**
         * Filter sanitize_title — strip multilingual delimiters before slug generation.
         *
         * Ensures slugs are derived from the default language text only.
         *
         * @param string $title     Sanitized title.
         * @param string $raw_title The title prior to sanitization.
         *
         * @return string
         */
        public static function filter_sanitize_title($title, $raw_title = ''): string
        {
        }
    }
    /**
     * Class LocaleData
     *
     * @since 1.0.0
     */
    class LocaleData
    {
        /**
         * Derive the ISO 3166-1 alpha-2 country code from a locale string (for flags).
         *
         * For locales with a country part (e.g. 'en_GB' → 'gb', 'zh_TW' → 'tw'),
         * extract the suffix. For bare codes, delegate to Flags LanguageMap.
         *
         * @param string $locale Locale string, e.g. 'en_GB', 'de_AT', 'zh_TW', 'de'.
         *
         * @return string Two-letter country code.
         */
        public static function locale_to_country(string $locale): string
        {
        }
        /**
         * Get all available locale data, keyed by locale string.
         *
         * Format: [ locale => [ 'code', 'country', 'name', 'en_name' ] ]
         * Sorted by English name (case-insensitive).
         *
         * @return array<string, array{code: string, country: string, name: string, en_name: string}>
         */
        public static function all(): array
        {
        }
        /**
         * Get locale data indexed by 2-letter language code.
         *
         * One canonical locale per code (e.g. 'es' → 'es_ES', 'de' → 'de_DE').
         * Use as a fallback when locale_variant is not configured for a language.
         *
         * @return array<string, array{locale: string, name: string, en_name: string}>
         */
        public static function by_code_index(): array
        {
        }
        /**
         * Canonical locale per 2-letter language code.
         *
         * Used as a fallback when locale_variant is not stored for a given code.
         *
         * @return array<string, string>
         */
        private static function canonical_locales(): array
        {
        }
    }
    /**
     * Class Router
     *
     * @since 1.0.0
     */
    class Router
    {
        /**
         * Detect and set the current language on Config.
         *
         * URL path is the sole source of truth for regular page loads.
         * For REST/AJAX requests (e.g. WC Store API from /fr/checkout/),
         * the Referer header is checked as a fallback.
         *
         * @param Config|null $config Optional Config instance (for testing).
         */
        public static function detect_language(?\TIV_GLOBUS\Core\Config $config = null): void
        {
        }
        /**
         * Extract language from the current request URL.
         *
         * @param Config $config Config instance.
         *
         * @return string|null
         */
        private static function from_url(\TIV_GLOBUS\Core\Config $config): ?string
        {
        }
        /**
         * Whether the current request is a REST API or AJAX request.
         *
         * @return bool
         */
        private static function is_rest_or_ajax(): bool
        {
        }
        /**
         * Extract language from the HTTP Referer header.
         *
         * @param Config $config Config instance.
         *
         * @return string|null
         */
        private static function from_referer(\TIV_GLOBUS\Core\Config $config): ?string
        {
        }
    }
    /**
     * Class SeoCanonical
     *
     * @since 1.1.0
     */
    class SeoCanonical
    {
        /**
         * Register the WP-core canonical filter (covers the non-Yoast case).
         *
         * @since 1.1.0
         * @return void
         */
        public static function register(): void
        {
        }
        /**
         * Point the canonical at the default-language URL for untranslated pages.
         *
         * @since 1.1.0
         *
         * @param mixed $canonical_url The canonical URL WordPress computed.
         * @param mixed $post          The post object (unused; the queried object is used).
         *
         * @return mixed
         */
        public static function filter_get_canonical_url($canonical_url, $post = null)
        {
        }
        /**
         * Is the current request a singular, non-default-language page whose post has
         * no translation for the current language (showing the default fallback)?
         *
         * @since 1.1.0
         *
         * @param Config $config Config instance.
         *
         * @return bool
         */
        public static function is_untranslated_singular(\TIV_GLOBUS\Core\Config $config): bool
        {
        }
    }
    /**
     * Class TextFilter
     *
     * @since 1.0.0
     */
    class TextFilter
    {
        /**
         * Opening delimiter prefix: `{:`.
         *
         * @var string
         */
        private const LOCALE_TAG_OPEN = '{:';
        /**
         * Raw mode — when true, text_filter() returns the input unchanged,
         * showing raw delimiters for debugging.
         *
         * @var bool
         */
        private static bool $raw_mode = false;
        /**
         * Per-request record: post ID => whether it has content in the current
         * language. Captured during translate_wp_post() while the raw delimited
         * source is still available; read by SeoCanonical / Yoast to canonicalize
         * untranslated pages to the default-language URL.
         *
         * @since 1.1.0
         * @var array<int, bool>
         */
        private static array $language_available = array();
        /**
         * Enable or disable raw mode.
         *
         * @param bool $enabled Whether to enable raw mode.
         */
        public static function set_raw_mode(bool $enabled): void
        {
        }
        /**
         * Whether raw mode is active.
         *
         * @return bool
         */
        public static function is_raw_mode(): bool
        {
        }
        /**
         * Check whether the string contains WPGlobus language delimiters.
         *
         * Fast path: strpos + ctype_lower on two chars after `{:`.
         *
         * @since 1.0.0
         *
         * @param string $text Text to check.
         *
         * @return bool
         */
        public static function has_translations(string $text): bool
        {
        }
        /**
         * Extract text for the requested language from a multilingual string.
         *
         * Format: `{:en}English{:}{:fr}French{:}` or `{:en}English{:fr}French{:}`.
         *
         * Fallback chain:
         * 1. Requested $language.
         * 2. $default_language (if different).
         * 3. Raw text with all delimiters stripped.
         *
         * @since 1.0.0
         *
         * @param string $text             Multilingual text.
         * @param string $language         Requested language code (e.g. 'fr').
         * @param string $default_language Default language code (e.g. 'en').
         *
         * @return string
         */
        public static function text_filter(string $text, string $language, string $default_language = 'en'): string
        {
        }
        /**
         * Extract the text block for one language.
         *
         * Looks for `{:xx}` and extracts until the next `{:` or end of string.
         *
         * @since 1.0.0
         *
         * @param string $text     Full multilingual text.
         * @param string $language Two-letter language code.
         *
         * @return string|null Extracted text, or null if language not found.
         */
        public static function extract_language(string $text, string $language): ?string
        {
        }
        /**
         * Translate a WP_Post object in place — filter title, content, excerpt.
         *
         * @since 1.0.0
         *
         * @param object $post WP_Post or similar object with post_title, post_content, post_excerpt.
         */
        public static function translate_wp_post(object $post): void
        {
        }
        /**
         * Whether a post has content in the current language, as recorded during
         * translate_wp_post(). Null when unknown (the post did not pass through
         * the_posts this request).
         *
         * @since 1.1.0
         *
         * @param int $post_id Post ID.
         *
         * @return bool|null
         */
        public static function post_has_language(int $post_id): ?bool
        {
        }
        /**
         * Reset the recorded per-post language availability (unit tests).
         *
         * @since 1.1.0
         * @return void
         */
        public static function reset_language_available(): void
        {
        }
        /**
         * Translate a term object in place — filter name and description.
         *
         * @since 1.0.0
         *
         * @param object $term Term object with name and description properties.
         */
        public static function translate_term(object $term): void
        {
        }
        /**
         * Merge a single-language value into a multilingual string.
         *
         * Canonical merge-on-save logic, shared by WCOptionFilter and CoreOptionFilter
         * (and mirrored by TermEditor::merge_term_field).
         *
         * @since 1.0.1
         *
         * @param string $new_value    The single-language value from the form.
         * @param string $db_value     The raw DB value (with all translations).
         * @param string $editing_lang The language being edited.
         * @param Config $config       Config instance.
         *
         * @return string|null Merged value, or null if no merge needed.
         */
        public static function merge_field(string $new_value, string $db_value, string $editing_lang, \TIV_GLOBUS\Core\Config $config): ?string
        {
        }
        /**
         * Build a multilingual delimited string from per-language values.
         *
         * @since 1.0.0
         *
         * @param array<string, string> $translations Language code => text pairs.
         *
         * @return string Delimited string, e.g. `{:en}Hello{:}{:fr}Bonjour{:}`.
         */
        public static function build_multilingual_string(array $translations): string
        {
        }
    }
    /**
     * Class Url
     *
     * @since 1.0.0
     */
    class Url
    {
        /**
         * Add a language prefix to a URL.
         *
         * @param string $url      The URL to localize.
         * @param string $language Target language code.
         * @param Config $config   Config instance.
         *
         * @return string
         */
        public static function localize_url(string $url, string $language, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Extract a two-letter language code from the URL path.
         *
         * @param string $url    The URL to parse.
         * @param Config $config Config instance.
         *
         * @return string|null Language code, or null if no valid prefix found.
         */
        public static function extract_language_from_url(string $url, \TIV_GLOBUS\Core\Config $config): ?string
        {
        }
        /**
         * Strip any language prefix from a URL.
         *
         * @param string $url    The URL.
         * @param Config $config Config instance.
         *
         * @return string
         */
        public static function strip_language_from_url(string $url, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Remove a language prefix from a path string.
         *
         * @param string $path   URL path (e.g. '/fr/about/').
         * @param Config $config Config instance.
         *
         * @return string Path without language prefix.
         */
        private static function strip_language_prefix(string $path, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Rebuild a URL from parsed components and a new path.
         *
         * @param array  $parsed Parsed URL components (from parse_url).
         * @param string $path   New path.
         *
         * @return string
         */
        private static function rebuild_url(array $parsed, string $path): string
        {
        }
    }
}
namespace TIV_GLOBUS\Data {
    class Controller
    {
        public static function register(): void
        {
        }
    }
    /**
     * Class DataController
     *
     * @since 1.0.0
     */
    class DataController
    {
        /**
         * Submenu page slug.
         *
         * @var string
         */
        public const PAGE_SLUG = 'tiv-globus-data';
        /**
         * Script handle for the deactivation warning.
         *
         * @var string
         */
        private const DEACTIVATE_HANDLE = 'tiv-globus-deactivate';
        /**
         * Script handle for the data tools page.
         *
         * @var string
         */
        private const DATA_TOOLS_HANDLE = 'tiv-globus-data-tools';
        /**
         * AJAX action name.
         *
         * @var string
         */
        private const AJAX_ACTION = 'tiv_globus_data';
        /**
         * Page hook suffix for targeting enqueue.
         *
         * @var string
         */
        private static string $page_hook = '';
        /**
         * Register hooks.
         *
         * @since 1.0.0
         */
        public static function register(): void
        {
        }
        /**
         * Add "Maintenance" submenu under TIV Globus.
         *
         * @since 1.0.0
         */
        public static function add_submenu_page(): void
        {
        }
        /**
         * Enqueue CSS/JS for the Maintenance page.
         *
         * @param string $hook Current admin page hook suffix.
         */
        public static function enqueue_data_tools(string $hook): void
        {
        }
        /**
         * Handle AJAX requests.
         *
         * @since 1.0.0
         */
        public static function handle_ajax(): void
        {
        }
        /**
         * AJAX: Run scan and store results.
         */
        private static function ajax_scan(): void
        {
        }
        /**
         * AJAX: Export one language as JSON download.
         */
        private static function ajax_export(): void
        {
        }
        /**
         * AJAX: Remove one language.
         */
        private static function ajax_remove(): void
        {
        }
        /**
         * AJAX: Import a language from uploaded JSON file.
         */
        private static function ajax_import(): void
        {
        }
        /**
         * Enqueue deactivation warning script on the plugins page only.
         *
         * @since 1.0.0
         *
         * @param string $hook Current admin page hook suffix.
         */
        public static function enqueue_deactivate_warning(string $hook): void
        {
        }
    }
    /**
     * Class DataPage
     *
     * @since 1.0.0
     */
    class DataPage
    {
        /**
         * Render the Maintenance page.
         *
         * @since 1.0.0
         */
        public static function render(): void
        {
        }
        /**
         * Render the per-language scan table.
         *
         * @param array $scan_data Scan result from Scanner::scan_all().
         */
        public static function render_scan_table(array $scan_data): void
        {
        }
    }
    /**
     * Class ExportImport
     *
     * @since 1.0.0
     */
    class ExportImport
    {
        /**
         * Export format version.
         *
         * @var int
         */
        private const FORMAT_VERSION = 1;
        /**
         * Export one language to an array (ready for JSON encoding).
         *
         * @param string $lang   Language code to export.
         * @param Logger $logger Progress logger.
         *
         * @return array Export data.
         */
        public static function export_language(string $lang, \TIV_GLOBUS\Data\Logger $logger): array
        {
        }
        /**
         * Generate the download filename for an export.
         *
         * @param string $lang Language code.
         *
         * @return string Filename like "example.com-2026-03-28-es.json".
         */
        public static function filename(string $lang): string
        {
        }
        /**
         * Validate and parse an import file's JSON content.
         *
         * @param string $json Raw JSON string.
         *
         * @return array Parsed data.
         * @throws \RuntimeException On invalid format.
         */
        public static function parse_import(string $json): array
        {
        }
        /**
         * Import one language from a parsed export array.
         *
         * @param array  $data   Parsed import data (from parse_import).
         * @param Logger $logger Progress logger.
         * @param bool   $dry_run If true, report but don't modify.
         *
         * @return array{processed: int, errors: int}
         */
        public static function import_language(array $data, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run = false): array
        {
        }
        /**
         * Import posts for one language.
         *
         * @param array  $posts   Post data from export.
         * @param string $lang    Language code.
         * @param string $default_lang Default language.
         * @param Logger $logger  Logger.
         * @param bool   $dry_run Dry run.
         *
         * @return array{processed: int, errors: int}
         */
        private static function import_posts(array $posts, string $lang, string $default_lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Import terms for one language.
         *
         * @param array  $terms   Term data from export.
         * @param string $lang    Language code.
         * @param string $default_lang Default language.
         * @param Logger $logger  Logger.
         * @param bool   $dry_run Dry run.
         *
         * @return array{processed: int, errors: int}
         */
        private static function import_terms(array $terms, string $lang, string $default_lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Import options for one language.
         *
         * @param array  $options Option data from export.
         * @param string $lang    Language code.
         * @param string $default_lang Default language.
         * @param Logger $logger  Logger.
         * @param bool   $dry_run Dry run.
         *
         * @return array{processed: int, errors: int}
         */
        private static function import_options(array $options, string $lang, string $default_lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Import WC attribute labels for one language.
         *
         * @param array  $attributes Attribute data from export.
         * @param string $lang       Language code.
         * @param Logger $logger     Logger.
         * @param bool   $dry_run    Dry run.
         *
         * @return array{processed: int, errors: int}
         */
        private static function import_attribute_labels(array $attributes, string $lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Import Elementor per-language meta.
         *
         * @param array  $elementor Post ID => raw JSON.
         * @param string $lang      Language code.
         * @param Logger $logger    Logger.
         * @param bool   $dry_run   Dry run.
         *
         * @return array{processed: int}
         */
        private static function import_elementor(array $elementor, string $lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Inject a language's text into an existing multilingual string.
         *
         * If the string has translations, replaces or adds the language block.
         * If not, wraps existing text as default and adds the new language.
         *
         * @param string $existing Raw DB value.
         * @param string $lang     Language code to inject.
         * @param string $text     Text for this language.
         * @param string $default_lang  Default language code.
         *
         * @return string Updated multilingual string.
         */
        private static function inject_language(string $existing, string $lang, string $text, string $default_lang): string
        {
        }
        /**
         * Recursively inject language values into a serialized option array.
         *
         * @param array  $target  Option value (modified by reference).
         * @param array  $import  Imported values (same structure as target subset).
         * @param string $lang    Language code.
         * @param string $default_lang Default language.
         *
         * @return bool Whether any value was changed.
         */
        private static function inject_into_array(array &$target, array $import, string $lang, string $default_lang): bool
        {
        }
        /**
         * Add a language to enabled_languages in wpglobus_option.
         *
         * @param string $lang   Language code.
         * @param Logger $logger Logger.
         */
        private static function add_to_config(string $lang, \TIV_GLOBUS\Data\Logger $logger): void
        {
        }
        /**
         * Export posts for one language.
         *
         * @param string $lang    Language to export.
         * @param string $default_lang Default language.
         * @param Logger $logger  Logger.
         *
         * @return array Exported post data.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        private static function export_posts(string $lang, string $default_lang, \TIV_GLOBUS\Data\Logger $logger): array
        {
        }
        /**
         * Export terms for one language.
         *
         * @param string $lang    Language to export.
         * @param string $default_lang Default language.
         * @param Logger $logger  Logger.
         *
         * @return array Exported term data.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        private static function export_terms(string $lang, string $default_lang, \TIV_GLOBUS\Data\Logger $logger): array
        {
        }
        /**
         * Export options for one language.
         *
         * @param string $lang    Language to export.
         * @param string $default_lang Default language.
         * @param Logger $logger  Logger.
         *
         * @return array Option name => extracted value.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        private static function export_options(string $lang, string $default_lang, \TIV_GLOBUS\Data\Logger $logger): array
        {
        }
        /**
         * Export Elementor per-language meta as raw blobs.
         *
         * @param string $lang   Language code.
         * @param Logger $logger Logger.
         *
         * @return array Post ID => raw Elementor JSON.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        private static function export_elementor(string $lang, \TIV_GLOBUS\Data\Logger $logger): array
        {
        }
        /**
         * Export WC attribute labels for one language.
         *
         * @param string $lang   Language code.
         * @param Logger $logger Logger.
         *
         * @return array Attribute ID => label.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        private static function export_attribute_labels(string $lang, \TIV_GLOBUS\Data\Logger $logger): array
        {
        }
        /**
         * Get a raw option value bypassing filters.
         *
         * @param string $name Option name.
         *
         * @return string|null
         */
        private static function get_raw_option(string $name): ?string
        {
        }
        /**
         * Update option value directly, bypassing filters.
         *
         * @param string $name  Option name.
         * @param string $value New value.
         */
        private static function update_raw_option(string $name, string $value): void
        {
        }
    }
    /**
     * Class FieldProcessor
     *
     * @since 1.0.0
     */
    class FieldProcessor
    {
        /**
         * Gutenberg block comment pattern.
         *
         * @var string
         */
        private const GUTENBERG_MARKER = '<!-- wp:wpglobus/language';
        /**
         * Extract one language from multilingual text, return plain text.
         *
         * @param string $text    Multilingual text (classic or Gutenberg).
         * @param string $lang    Language to extract.
         * @param string $default_lang Default language for fallback.
         *
         * @return string Plain text for the requested language.
         */
        public static function extract_language(string $text, string $lang, string $default_lang): string
        {
        }
        /**
         * Remove one language from multilingual text, re-serialize the rest.
         *
         * If one language remains, returns plain text (no delimiters).
         * If two or more remain, returns re-serialized delimiters.
         *
         * @param string $text Multilingual text (classic or Gutenberg).
         * @param string $lang Language to remove.
         *
         * @return string
         */
        public static function remove_language(string $text, string $lang): string
        {
        }
        /**
         * Split multilingual text into per-language array.
         *
         * @param string $text Multilingual text (classic or Gutenberg).
         *
         * @return array<string, string> Language code => content.
         */
        public static function split_all_languages(string $text): array
        {
        }
        /**
         * Recursively walk an option value, applying a callback to string values.
         *
         * @param mixed    $value     Option value (string, array, or other).
         * @param callable $callback        Callback: fn(string $value): string.
         * @param string[] $keys_only If non-empty, only process these array keys.
         *
         * @return mixed Processed value.
         */
        public static function walk_option($value, callable $callback, array $keys_only = array())
        {
        }
        /**
         * Check if text contains Gutenberg language wrapper blocks.
         *
         * @param string $text Text to check.
         *
         * @return bool
         */
        private static function is_gutenberg(string $text): bool
        {
        }
        /**
         * Extract one language from Gutenberg content.
         *
         * @param string $text    Gutenberg content with language wrapper blocks.
         * @param string $lang    Target language.
         * @param string $default_lang Default language for fallback.
         *
         * @return string Inner blocks content for the target language.
         */
        private static function extract_gutenberg(string $text, string $lang, string $default_lang): string
        {
        }
        /**
         * Remove one language wrapper block from Gutenberg content.
         *
         * @param string $text Gutenberg content.
         * @param string $lang Language to remove.
         *
         * @return string Content with that language's wrapper block removed.
         */
        private static function remove_gutenberg(string $text, string $lang): string
        {
        }
        /**
         * Split Gutenberg content into per-language inner blocks.
         *
         * @param string $text Gutenberg content.
         *
         * @return array<string, string> Language code => inner blocks.
         */
        private static function split_gutenberg(string $text): array
        {
        }
        /**
         * Extract inner blocks for one language from Gutenberg content.
         *
         * @param string $text Gutenberg content.
         * @param string $lang Language code.
         *
         * @return string|null Inner blocks content, or null if not found.
         */
        private static function extract_gutenberg_inner(string $text, string $lang): ?string
        {
        }
    }
    /**
     * Class Logger
     *
     * @since 1.0.0
     */
    class Logger
    {
        /**
         * Collected messages (for admin AJAX responses).
         *
         * @var array<array{level: string, message: string}>
         */
        private array $messages = array();
        /**
         * Output callback.
         *
         * @var callable
         */
        private $output_fn;
        /**
         * Constructor.
         *
         * @param callable $output_fn Receives (string $level, string $message).
         */
        private function __construct(callable $output_fn)
        {
        }
        /**
         * Create a logger that stores messages for later retrieval (admin AJAX).
         *
         * @return self
         */
        public static function for_admin(): self
        {
        }
        /**
         * Create a logger that outputs to WP-CLI.
         *
         * @return self
         */
        public static function for_cli(): self
        {
        }
        public function info(string $message): void
        {
        }
        public function success(string $message): void
        {
        }
        public function warning(string $message): void
        {
        }
        public function error(string $message): void
        {
        }
        /**
         * Get all collected messages.
         *
         * @return array<array{level: string, message: string}>
         */
        public function get_messages(): array
        {
        }
        private function log(string $level, string $message): void
        {
        }
    }
    /**
     * Class OptionRegistry
     *
     * @since 1.0.0
     */
    class OptionRegistry
    {
        /**
         * Core WP options that may contain delimiters.
         *
         * @var string[]
         */
        private const WP_STRING_OPTIONS = array('blogname', 'blogdescription');
        /**
         * Plugin widget options stored as indexed arrays with translatable keys.
         *
         * @var array<string, string[]>
         */
        private const WIDGET_LIST_OPTIONS = array('widget_tiv_globus_switcher' => array('title'));
        /**
         * Get the WP core string options that may contain delimiters.
         *
         * These are merged on save by Core\CoreOptionFilter (independent of WC).
         *
         * @since 1.0.1
         *
         * @return string[]
         */
        public static function get_wp_string_options(): array
        {
        }
        /**
         * Get all string options that may contain delimiters.
         *
         * @return string[]
         */
        public static function get_string_options(): array
        {
        }
        /**
         * Get associative array options with translatable keys.
         *
         * @return array<string, string[]>
         */
        public static function get_assoc_options(): array
        {
        }
        /**
         * Get list (indexed array) options with translatable keys.
         *
         * @return array<string, string[]>
         */
        public static function get_list_options(): array
        {
        }
        /**
         * Discover dynamic shipping instance options in the database.
         *
         * Pattern: woocommerce_{method}_{N}_settings
         *
         * @return string[]
         */
        public static function get_shipping_options(): array
        {
        }
        /**
         * Get translatable keys for shipping instance options.
         *
         * @return string[]
         */
        public static function get_shipping_translatable_keys(): array
        {
        }
    }
    /**
     * Class RemoveLanguage
     *
     * @since 1.0.0
     */
    class RemoveLanguage
    {
        /**
         * Execute language removal.
         *
         * @param string $lang    Language code to remove.
         * @param Logger $logger  Progress logger.
         * @param bool   $dry_run If true, report but don't modify.
         *
         * @return array{processed: int, errors: int}
         */
        public static function execute(string $lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run = false): array
        {
        }
        /**
         * Strip language from posts.
         *
         * @param string $lang    Language to remove.
         * @param Logger $logger  Logger.
         * @param bool   $dry_run Dry run.
         *
         * @return array{processed: int, errors: int}
         */
        private static function strip_posts(string $lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Strip language from terms.
         *
         * @param string $lang    Language to remove.
         * @param Logger $logger  Logger.
         * @param bool   $dry_run Dry run.
         *
         * @return array{processed: int, errors: int}
         */
        private static function strip_terms(string $lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Strip language from options.
         *
         * @param string $lang    Language to remove.
         * @param Logger $logger  Logger.
         * @param bool   $dry_run Dry run.
         *
         * @return array{processed: int, errors: int}
         */
        private static function strip_options(string $lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Strip multilingual content from a serialized option.
         *
         * @param string   $name    Option name.
         * @param string[] $keys    Translatable keys within the option.
         * @param callable $strip_fn Callback to strip text.
         * @param bool     $dry_run  Dry run.
         *
         * @return bool Whether the option was changed.
         */
        private static function strip_serialized_option(string $name, array $keys, callable $strip_fn, bool $dry_run): bool
        {
        }
        /**
         * Strip language from WC attribute labels.
         *
         * @param string $lang    Language to remove.
         * @param Logger $logger  Logger.
         * @param bool   $dry_run Dry run.
         *
         * @return array{processed: int, errors: int}
         */
        private static function strip_attribute_labels(string $lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Delete slug meta for a language.
         *
         * @param string $lang    Language code.
         * @param Logger $logger  Logger.
         * @param bool   $dry_run Dry run.
         *
         * @return array{processed: int}
         */
        private static function delete_slug_meta(string $lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Delete Elementor per-language meta.
         *
         * @param string $lang    Language code.
         * @param Logger $logger  Logger.
         * @param bool   $dry_run Dry run.
         *
         * @return array{processed: int}
         */
        private static function delete_elementor_meta(string $lang, \TIV_GLOBUS\Data\Logger $logger, bool $dry_run): array
        {
        }
        /**
         * Remove language from enabled_languages in wpglobus_option.
         *
         * @param string $lang   Language code.
         * @param Logger $logger Logger.
         */
        private static function remove_from_config(string $lang, \TIV_GLOBUS\Data\Logger $logger): void
        {
        }
        /**
         * Get raw option value bypassing filters.
         *
         * @param string $name Option name.
         *
         * @return string|null
         */
        private static function get_raw_option(string $name): ?string
        {
        }
        /**
         * Update option value directly, bypassing filters.
         *
         * @param string $name  Option name.
         * @param string $value New value.
         */
        private static function update_raw_option(string $name, string $value): void
        {
        }
        /**
         * Build a where clause for meta_key deletion.
         *
         * Wrapped in a method to avoid phpcs SlowDBQuery false positive.
         *
         * @param string $key The meta key value.
         *
         * @return array Where clause array for $wpdb->delete().
         */
        private static function build_where(string $column, string $value): array
        {
        }
    }
    /**
     * Class Scanner
     *
     * @since 1.0.0
     */
    class Scanner
    {
        /**
         * Full scan: all entity types, per-language counts.
         *
         * Returns an array keyed by language code, each containing counts
         * by entity type. Includes orphaned languages (found in content but
         * not in enabled_languages).
         *
         * @return array{
         *     languages: array<string, array{posts: int, terms: int, options: int, slugs: int, elementor: int}>,
         *     default_language: string,
         *     enabled_languages: string[],
         *     scanned_at: string
         * }
         */
        public static function scan_all(): array
        {
        }
        /**
         * Count posts with delimiters, per language.
         *
         * @return array<string, int> Language code => count.
         */
        private static function scan_posts_by_language(): array
        {
        }
        /**
         * Count terms with delimiters, per language.
         *
         * @return array<string, int> Language code => count.
         */
        private static function scan_terms_by_language(): array
        {
        }
        /**
         * Count options with delimiters, per language.
         *
         * @return array<string, int> Language code => count.
         */
        private static function scan_options_by_language(): array
        {
        }
        /**
         * Count slug meta entries per language.
         *
         * @return array<string, int> Language code => count.
         */
        private static function scan_slug_meta_by_language(): array
        {
        }
        /**
         * Count Elementor per-language meta entries.
         *
         * @return array<string, int> Language code => count.
         */
        private static function scan_elementor_meta_by_language(): array
        {
        }
        /**
         * Count WC attribute labels with delimiters, per language.
         *
         * @return array<string, int> Language code => count.
         */
        private static function scan_attribute_labels_by_language(): array
        {
        }
        /**
         * Count languages found across rows of objects.
         *
         * @param array    $rows   DB result rows.
         * @param string[] $fields Fields to inspect.
         *
         * @return array<string, int> Language code => count of rows containing that language.
         */
        private static function count_languages_in_rows(array $rows, array $fields): array
        {
        }
        /**
         * Find all language codes present in a multilingual text.
         *
         * @param string $text Text to inspect.
         *
         * @return string[] Language codes found.
         */
        private static function find_languages_in_text(string $text): array
        {
        }
        /**
         * Get a raw option value from the database, bypassing filters.
         *
         * @param string $name Option name.
         *
         * @return string|null
         */
        private static function get_raw_option(string $name): ?string
        {
        }
    }
}
namespace TIV_GLOBUS\Elementor {
    class Controller
    {
        public static function register(): void
        {
        }
    }
    /**
     * Class ElementorMetaSwap
     *
     * @since 1.0.0
     */
    class ElementorMetaSwap
    {
        /**
         * Meta keys swapped to `{key}_{lang}` for non-default languages.
         */
        private const TRANSLATABLE_KEYS = array('_elementor_data');
        /**
         * Cache meta keys — suppressed on read, discarded on write for non-default languages.
         * Element cache contains pre-rendered HTML with text — must not serve default-language cache.
         */
        private const CACHE_KEYS = array('_elementor_element_cache');
        /**
         * Register hooks if Elementor is active.
         *
         * @since 1.0.0
         */
        public static function register(): void
        {
        }
        /**
         * Returns the non-default language code, or empty string if default.
         *
         * @since 1.0.0
         * @return string Language code or ''.
         */
        private static function get_swap_lang(): string
        {
        }
        /**
         * On read: return translated meta if it exists, suppress cache.
         *
         * @since 1.0.0
         *
         * @param mixed  $value     Null by default (let WP handle).
         * @param int    $object_id Post ID.
         * @param string $meta_key  Meta key being read.
         * @param bool   $single    Whether to return a single value.
         *
         * @return mixed
         */
        public static function swap_on_read($value, $object_id, $meta_key, $single)
        {
        }
        /**
         * On write: redirect to language-specific key, discard cache writes.
         *
         * @since 1.0.0
         *
         * @param mixed  $check      Null by default (let WP handle).
         * @param int    $object_id  Post ID.
         * @param string $meta_key   Meta key being written.
         * @param mixed  $meta_value The new value.
         * @param mixed  $prev_value Previous value (for conditional updates).
         *
         * @return mixed Null to proceed normally, true to short-circuit.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function swap_on_write($check, $object_id, $meta_key, $meta_value, $prev_value)
        {
        }
    }
}
namespace TIV_GLOBUS\Slug {
    class Controller
    {
        public static function register(): void
        {
        }
    }
    /**
     * Class PostSlugAdmin
     *
     * @since 1.0.0
     */
    class PostSlugAdmin
    {
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Inject translated slug into $post->post_name for Gutenberg editor display.
         *
         * Runs at priority 4 (before GutenbergEditor at 5).
         *
         * @param \WP_Post $post The post object.
         */
        public static function inject_slug_on_the_post($post): void
        {
        }
        /**
         * Capture translated slug on REST save, store in postmeta, restore default.
         *
         * Runs at priority 3 on rest_pre_insert_post/page.
         *
         * @param \stdClass        $prepared_post Prepared post object.
         * @param \WP_REST_Request $request       REST request.
         *
         * @return \stdClass
         *
         * @noinspection ReturnTypeCanBeDeclaredInspection — WP hook callback.
         */
        public static function capture_slug_on_rest_save($prepared_post, $request)
        {
        }
        /**
         * Inject translated slug into REST response after save.
         *
         * Runs at priority 11 (after GutenbergEditor at 10).
         *
         * @param \WP_REST_Response $response Result to send to the client.
         * @param array             $handler  Route handler data.
         * @param \WP_REST_Request  $request  Request used to generate the response.
         *
         * @return \WP_REST_Response
         *
         * @noinspection ReturnTypeCanBeDeclaredInspection — WP hook callback.
         * @noinspection PhpUnusedParameterInspection
         */
        public static function inject_slug_in_rest_response($response, $handler, $request)
        {
        }
        /**
         * Inject translated slug on edit_form_top for Classic editor.
         *
         * Runs at priority 1 (before ClassicEditor at default 10).
         *
         * @param \WP_Post $post The post being edited.
         */
        public static function inject_slug_on_edit_form_top($post): void
        {
        }
        /**
         * Filter Classic editor permalink HTML to show translated slug.
         *
         * Get_sample_permalink_html() calls get_sample_permalink() which reads
         * post_name from the DB via get_post(), bypassing our edit_form_top
         * modification. This filter replaces the default slug with the translated
         * slug in the final HTML output.
         *
         * @param string       $html      Sample permalink HTML.
         * @param int          $post_id   Post ID.
         * @param string|null  $new_title New sample permalink title.
         * @param string|null  $new_slug  New sample permalink slug.
         * @param \WP_Post     $post      Post object.
         *
         * @return string
         *
         * @noinspection PhpUnusedParameterInspection — signature required by get_sample_permalink_html filter.
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public static function filter_sample_permalink_html($html, $post_id, $new_title, $new_slug, $post)
        {
        }
        /**
         * Capture translated slug on classic editor save, store in postmeta, restore default.
         *
         * Runs at priority 4 on wp_insert_post_data (before ClassicEditor merge at 5).
         *
         * @param array $data    Sanitized post data.
         * @param array $postarr Raw POST data.
         *
         * @return array
         *
         * @noinspection ReturnTypeCanBeDeclaredInspection — WP hook callback.
         */
        public static function capture_slug_on_classic_save($data, $postarr)
        {
        }
    }
    /**
     * Class PostSlugFrontend
     *
     * @since 1.0.0
     */
    class PostSlugFrontend
    {
        /**
         * Recursion guard for permalink filtering.
         *
         * @var bool
         */
        private static $filtering_permalink = false;
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Filter post/CPT permalink to use translated slug.
         *
         * Handles both the post slug and any category slugs embedded
         * via the %category% token in the permalink structure.
         *
         * @param string   $permalink The post's permalink.
         * @param \WP_Post $post      The post object.
         *
         * @return string
         */
        public static function filter_post_permalink($permalink, $post)
        {
        }
        /**
         * Filter page permalink to use translated slug.
         *
         * Page_link passes the post ID as the second param (not the post object).
         *
         * @param string $permalink The page's permalink.
         * @param int    $post_id   The page ID.
         *
         * @return string
         */
        public static function filter_page_permalink($permalink, $post_id)
        {
        }
        /**
         * Replace ancestor post slugs in a hierarchical permalink.
         *
         * @param string $permalink The current permalink.
         * @param int    $post_id   The post ID.
         * @param \TIV_GLOBUS\Core\Config $config    Config instance.
         *
         * @return string
         */
        private static function replace_ancestor_slugs(string $permalink, int $post_id, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Replace category slugs in a post permalink.
         *
         * When permalink structure includes %category%, WP embeds the native
         * category slug before the post_link filter fires. We need to swap it
         * to the translated slug here.
         *
         * @param string $permalink The current permalink.
         * @param int    $post_id   The post ID.
         * @param \TIV_GLOBUS\Core\Config $config    Config instance.
         *
         * @return string
         */
        private static function replace_category_slugs_in_permalink(string $permalink, int $post_id, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Translate the product category segments of a product permalink.
         *
         * With a %product_cat% product base (e.g. /shop/%product_cat%/), WooCommerce
         * puts the default-language slugs of the chosen category and its parents in
         * the path. Only path segments before the product slug that match one of the
         * product's categories (or their parents) are swapped.
         *
         * @since 1.3.0
         *
         * @param string   $permalink The product permalink.
         * @param \WP_Post $post      The product.
         *
         * @return string
         */
        public static function replace_product_cat_slugs($permalink, $post)
        {
        }
        /**
         * Resolve translated page slugs in the `pagename` query var.
         *
         * When a page URL uses a translated slug (e.g., /ru/tg-test-roditelskaya/),
         * WP's get_page_by_path() cannot find it because the real post_name differs.
         * This filter replaces each translated slug segment with the real (default) slug
         * so WP resolves the page normally.
         *
         * @param array $query_vars The query variables from WP::parse_request().
         *
         * @return array
         */
        public static function resolve_translated_page_slugs($query_vars)
        {
        }
        /**
         * Resolve each segment in a hierarchical page slug path.
         *
         * @param string $pagename The pagename query var (may contain / for hierarchy).
         * @param \TIV_GLOBUS\Core\Config $config   Config instance.
         *
         * @return string Resolved pagename with real slugs.
         */
        private static function resolve_page_slug_path(string $pagename, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Routing fallback: resolve translated slug when WP finds 0 posts.
         *
         * If a singular query returns no posts (404), try finding a post
         * by its translated slug and fix the query.
         *
         * @param \WP_Post[]  $posts    Array of post objects.
         * @param \WP_Query   $wp_query The WP_Query instance.
         *
         * @return \WP_Post[]
         */
        public static function resolve_translated_slug($posts, $wp_query)
        {
        }
        /**
         * Redirect from default slug to translated slug in non-default language.
         *
         * When a page/post is accessed via its default-language slug in a non-default
         * language (e.g., /ru/sample-page/ instead of /ru/sample-page-ru/), redirect
         * 301 to the translated slug URL to avoid duplicate content.
         *
         * @since 1.0.0
         */
        public static function redirect_to_translated_slug(): void
        {
        }
        /**
         * Redirect a product URL whose category segments are not the translated ones.
         *
         * Same number of path segments but a different path than the current
         * permalink means only the %product_cat% part differs (the product slug
         * itself is handled by redirect_to_translated_slug()).
         *
         * @since 1.3.0
         */
        public static function redirect_product_cat_slugs(): void
        {
        }
        /**
         * Redirect a previous translated slug to the post's current URL.
         *
         * The per-language counterpart of WP core's wp_old_slug_redirect():
         * after /es/old-slug/ was renamed to /es/new-slug/, the old URL would
         * otherwise be a 404.
         *
         * @since 1.3.0
         */
        public static function redirect_old_translated_slug(): void
        {
        }
        /**
         * Fix url_to_postid() for URLs with translated slugs.
         *
         * Strips the language prefix and replaces the translated slug with the
         * default-language slug so WP's rewrite rule matching can find the post.
         *
         * @since 1.0.0
         *
         * @param string $url The URL to resolve.
         *
         * @return string Modified URL with default slug.
         */
        public static function filter_url_to_postid($url): string
        {
        }
        /**
         * Reset static state (for testing).
         */
        public static function reset(): void
        {
        }
    }
    /**
     * Class SlugStorage
     *
     * @since 1.0.0
     */
    class SlugStorage
    {
        /**
         * Meta key prefix for translated slugs.
         * Full key: _wpglobus_slug_{lang}, e.g. _wpglobus_slug_fr.
         *
         * Backward compatible with wpglobus-plus.
         */
        public const META_KEY_PREFIX = '_wpglobus_slug_';
        /**
         * Meta key prefix for previous translated post slugs (multiple rows),
         * the per-language counterpart of WP core's `_wp_old_slug`.
         * Full key: _tiv_globus_old_slug_{lang}.
         *
         * @since 1.3.0
         */
        public const OLD_META_KEY_PREFIX = '_tiv_globus_old_slug_';
        /**
         * Get translated post slug for a given language.
         *
         * Default language → native post_name. Other → postmeta.
         *
         * @param int    $post_id Post ID.
         * @param string $lang    Language code.
         * @param \TIV_GLOBUS\Core\Config $config  Config instance.
         *
         * @return string Slug (may be empty if no translation).
         */
        public static function get_post_slug(int $post_id, string $lang, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Save translated post slug.
         *
         * @param int    $post_id Post ID.
         * @param string $lang    Language code.
         * @param string $slug    Slug value.
         */
        public static function save_post_slug(int $post_id, string $lang, string $slug): void
        {
        }
        /**
         * Get translated term slug for a given language.
         *
         * Default language → native term slug. Other → termmeta.
         *
         * @param int    $term_id Term ID.
         * @param string $lang    Language code.
         * @param \TIV_GLOBUS\Core\Config $config  Config instance.
         *
         * @return string Slug (may be empty if no translation).
         */
        public static function get_term_slug(int $term_id, string $lang, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Save translated term slug.
         *
         * @param int    $term_id Term ID.
         * @param string $lang    Language code.
         * @param string $slug    Slug value.
         */
        public static function save_term_slug(int $term_id, string $lang, string $slug): void
        {
        }
        /**
         * Find a published post by its translated slug.
         *
         * @param string       $slug      Translated slug to search for.
         * @param string       $lang      Language code.
         * @param string|array $post_type Post type(s) to search in.
         *
         * @return int|null Post ID, or null if not found.
         */
        public static function find_post_by_slug(string $slug, string $lang, $post_type = 'any'): ?int
        {
        }
        /**
         * Find a published post by a previous translated slug.
         *
         * @since 1.3.0
         *
         * @param string $slug Old translated slug.
         * @param string $lang Language code.
         *
         * @return int|null Post ID (the most recent owner of that old slug), or null.
         */
        public static function find_post_by_old_slug(string $slug, string $lang): ?int
        {
        }
        /**
         * Find a term by its translated slug.
         *
         * @param string $slug     Translated slug to search for.
         * @param string $lang     Language code.
         * @param string $taxonomy Taxonomy name.
         *
         * @return int|null Term ID, or null if not found.
         */
        public static function find_term_by_slug(string $slug, string $lang, string $taxonomy): ?int
        {
        }
        /**
         * Make a post slug unique for a given language.
         *
         * Appends -2, -3 etc. on conflict.
         *
         * @param string $slug    Desired slug.
         * @param string $lang    Language code.
         * @param int    $post_id Current post ID (excluded from conflict check).
         *
         * @return string Unique slug.
         */
        public static function unique_post_slug(string $slug, string $lang, int $post_id): string
        {
        }
        /**
         * Make a term slug unique for a given language.
         *
         * Appends -2, -3 etc. on conflict.
         *
         * @param string $slug    Desired slug.
         * @param string $lang    Language code.
         * @param int    $term_id Current term ID (excluded from conflict check).
         *
         * @return string Unique slug.
         */
        public static function unique_term_slug(string $slug, string $lang, int $term_id): string
        {
        }
    }
    /**
     * Class TermExistence
     */
    class TermExistence
    {
        /**
         * Term ID to inject into the next terms_clauses query.
         *
         * @var int|null
         */
        private static $inject_term_id;
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        // ── Layer 1: Fix term_exists() ───────────────────────────────────────
        /**
         * Intercept term_exists() query args. If the searched term name matches
         * a language extraction from an existing multilingual term, inject a
         * one-shot terms_clauses filter to include that term in the SQL results.
         *
         * @param array      $defaults    Query args for get_terms().
         * @param int|string $term        The term to check (ID, slug, or name).
         * @param string     $taxonomy    Taxonomy slug.
         * @param int|null   $parent_id_term Parent term ID, or null.
         *
         * @return array Modified defaults.
         */
        public static function intercept_term_exists($defaults, $term, $taxonomy, $parent_id_term)
        {
        }
        /**
         * One-shot terms_clauses filter: adds OR t.term_id = N to the WHERE clause
         * so that get_terms() finds the multilingual term regardless of slug/name mismatch.
         *
         * @param array $clauses    SQL clauses (fields, join, where, orderby, etc.).
         * @param array $taxonomies Taxonomy names.
         * @param array $args       Query args.
         *
         * @return array Modified clauses.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function inject_term_in_clauses($clauses, $taxonomies, $args)
        {
        }
        // ── Layer 2: Prevent duplicate creation ──────────────────────────────
        /**
         * Prevent duplicate term creation by checking if the incoming name
         * matches any language extraction from an existing multilingual term.
         *
         * @param string|\WP_Error $term     Term name.
         * @param string           $taxonomy Taxonomy slug.
         * @param array|string     $args     Arguments passed to wp_insert_term(), includes 'parent'.
         *
         * @return string|\WP_Error Original term name or WP_Error to abort.
         */
        public static function prevent_duplicate_term($term, $taxonomy, $args = array())
        {
        }
        // ── Layer 3: Resolve tax_input on admin save ─────────────────────────
        /**
         * Resolve filtered (single-language) tag names in $_POST['tax_input']
         * back to term IDs before edit_post() processes them.
         *
         * Covers Classic Editor (action=editpost) and Quick Edit (action=inline-save).
         */
        public static function resolve_tax_input_on_save(): void
        {
        }
        // ── Shared lookup ────────────────────────────────────────────────────
        /**
         * Find an existing multilingual term by matching a filtered (single-language)
         * name against language extractions from delimiter-wrapped DB names.
         *
         * @param string   $name     The filtered single-language name.
         * @param string   $taxonomy The taxonomy.
         * @param int|null $parent_id   Parent term ID for hierarchical taxonomies (null = any).
         *
         * @return int|null Existing term ID, or null if not found.
         */
        public static function find_multilingual_term(string $name, string $taxonomy, ?int $parent_id = null): ?int
        {
        }
    }
    /**
     * Class TermSlugAdmin
     *
     * @since 1.0.0
     */
    class TermSlugAdmin
    {
        /**
         * Cached default slug from DB, keyed by term_id.
         *
         * @var array<int, string>
         */
        private static $cached_default_slugs = array();
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Register edited_{taxonomy} hooks for all UI-visible taxonomies.
         * Uses show_ui (not public) to include WC attribute taxonomies (pa_*),
         * which are public:false but show_ui:true.
         */
        public static function register_save_hooks(): void
        {
        }
        /**
         * Inject translated slug into the term object on the edit page.
         *
         * Only runs on term.php (single term edit), not list pages.
         *
         * @param mixed $term The term object.
         *
         * @return mixed
         */
        public static function inject_slug_on_get_term($term)
        {
        }
        /**
         * Cache the default slug from DB before WordPress overwrites it on save.
         */
        public static function cache_default_slug_before_save(): void
        {
        }
        /**
         * Cache default slug before wp_update_term() writes to the database.
         *
         * Passthrough filter on `wp_update_term_data` — caches as side effect.
         *
         * @noinspection PhpUnusedParameterInspection — signature required by wp_update_term_data filter.
         * Covers Quick Edit (AJAX) and any save path that bypasses load-edit-tags.php.
         *
         * @param array  $data     Term data to be updated.
         * @param int    $term_id  Term ID.
         * @param string $taxonomy Taxonomy slug.
         * @param array  $args     Arguments passed to wp_update_term().
         *
         * @return array Unmodified $data.
         */
        public static function cache_default_slug_before_update($data, $term_id, $taxonomy, $args): array
        {
        }
        /**
         * Capture translated slug after save, restore default slug.
         *
         * Runs at priority 9 on edited_{taxonomy} (before TermEditor's merge at 10).
         *
         * @param int $term_id The term ID.
         */
        public static function capture_slug_on_save(int $term_id): void
        {
        }
        /**
         * Reset static state (for testing).
         */
        public static function reset(): void
        {
        }
    }
    /**
     * Class TermSlugFrontend
     *
     * @since 1.0.0
     */
    class TermSlugFrontend
    {
        /**
         * Recursion guard for term_link filtering.
         *
         * @var bool
         */
        private static $filtering_term_link = false;
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Filter term_link to use translated slug.
         *
         * @param string   $termlink The term link URL.
         * @param \WP_Term $term     The term object.
         * @param string   $taxonomy The taxonomy slug.
         *
         * @return string
         *
         * @noinspection ReturnTypeCanBeDeclaredInspection — WP hook callback.
         */
        public static function filter_term_link($termlink, $term, $taxonomy)
        {
        }
        /**
         * Replace ancestor term slugs in a hierarchical term link.
         *
         * @param string $termlink The current term link.
         * @param int    $term_id  The term ID.
         * @param string $taxonomy The taxonomy.
         * @param \TIV_GLOBUS\Core\Config $config   Config instance.
         *
         * @return string
         */
        private static function replace_ancestor_term_slugs(string $termlink, int $term_id, string $taxonomy, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Resolve translated term slugs in the request query vars.
         *
         * For each taxonomy query var present (category_name, post_tag, product_cat, etc.),
         * look up the translated slug and replace with the real (default) slug
         * so WP can resolve it normally.
         *
         * @param array $query_vars The query variables.
         *
         * @return array
         *
         * @noinspection ReturnTypeCanBeDeclaredInspection — WP hook callback.
         */
        public static function resolve_translated_term_slugs($query_vars)
        {
        }
        /**
         * Reset static state (for testing).
         */
        public static function reset(): void
        {
        }
    }
}
namespace TIV_GLOBUS\Switcher {
    class Controller
    {
        public static function register(): void
        {
        }
        private static function setup_flags(): void
        {
        }
    }
    /**
     * Class SwitcherBlock
     *
     * @since 1.0.0
     */
    class SwitcherBlock
    {
        /**
         * Block name. Unchanged from 1.0.0.
         *
         * @var string
         */
        public const NAME = 'tiv-globus/language-switcher';
        /**
         * Our own inserter category, so the block is not buried among core's 17 widget blocks.
         * Matches the "TIV Globus" heading the Appearance > Menus meta box already carries.
         *
         * @var string
         */
        public const CATEGORY = 'tiv-globus';
        /**
         * Handle of the flag stylesheet, registered for the editor.
         *
         * A dedicated handle rather than the global 'tiv-flags' one on purpose. The switcher
         * stylesheet names this as a dependency, and WordPress DROPS a stylesheet whose
         * dependency is not registered when it resolves. The global handle is only registered
         * later, on admin_enqueue_scripts, so depending on it left the switcher stylesheet -
         * and with it the flags and the list styling - out of the iframed editor canvas
         * altogether (bullets, no flags). Registering our own at block-registration time
         * guarantees it is present whenever the block style resolves.
         *
         * @var string
         */
        private const HANDLE_FLAGS = 'tiv-globus-switcher-flags';
        /**
         * Register the block and its inserter category.
         *
         * Deferred to `init` by {@see Controller::register()} because the field schema is
         * translated.
         *
         * @since 1.2.0
         *
         * @return void
         */
        public static function register(): void
        {
        }
        /**
         * Add our inserter category.
         *
         * @since 1.2.0
         *
         * @param array $categories Registered block categories.
         *
         * @return array
         * @internal Filter callback.
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public static function filter__block_categories($categories)
        {
        }
        /**
         * Make the flags visible inside the iframed block editor canvas.
         *
         * Registers the flag stylesheet under our own handle and declares it a dependency of
         * the switcher stylesheet, which is what carries it into the editor: that stylesheet is
         * registered as the block's own and so follows the block into the iframe, pulling its
         * dependencies with it. Admin only; the front end already loads the flag CSS globally
         * via {@see Controller::setup_flags()}, and adds no such dependency so the switcher
         * stylesheet is never at risk of being dropped there.
         *
         * @since 1.2.0
         *
         * @return void
         */
        private static function add_flags_to_editor(): void
        {
        }
        /**
         * Render the block.
         *
         * Block attributes live in post content, so they are input, not configuration. Every
         * setting is a closed set - three selects with fixed options and two checkboxes - so
         * the incoming value is only ever COMPARED, and what travels onward is our own
         * constant. Anything outside the schema cannot reach the renderer at all.
         *
         * This is also the only shape QIT's semgrep rule audit.php.wp.security.xss.block-attr
         * accepts: it tracks the attributes as tainted through any variable and does not
         * accept sanitize_key() or escaping as clearing it - only never assigning a derived
         * value does. Do not "simplify" this into anything that assigns from $attributes.
         *
         * @since 1.2.0
         *
         * @param array $attributes Block attributes.
         *
         * @return string
         * @noinspection PhpTernaryExpressionCanBeReplacedWithConditionInspection
         */
        public static function render(array $attributes): string
        {
        }
    }
    /**
     * Class SwitcherMenuItem
     *
     * @since 1.0.0
     */
    class SwitcherMenuItem
    {
        /**
         * Value stored in `_menu_item_object` for our items.
         *
         * Unchanged from 1.0.0 so menu items placed by earlier versions keep working.
         *
         * @var string
         */
        public const OBJECT_TYPE = 'tiv_globus_switcher';
        /**
         * Postmeta key holding an item's settings. Unchanged from 1.0.0.
         *
         * @var string
         */
        private const META_SETTINGS = '_tiv_globus_switcher_settings';
        /**
         * Build and register the menu item type.
         *
         * Deferred to `init` by {@see Controller::register()} because the field schema is
         * translated, and building it earlier trips WordPress's "translation loaded too early"
         * notice.
         *
         * @since 1.2.0
         *
         * @return void
         */
        public static function register(): void
        {
        }
        /**
         * Render the switcher for one menu item.
         *
         * @since 1.2.0
         *
         * @param array $settings The item's saved settings.
         *
         * @return string
         */
        public static function render(array $settings): string
        {
        }
    }
    /**
     * Class SwitcherRenderer
     *
     * @since 1.2.0
     */
    class SwitcherRenderer
    {
        /**
         * Render a language switcher.
         *
         * @since 1.2.0
         *
         * @param array $args {
         *     Optional.
         *
         *     @type string   $style      One of Switcher::STYLE_*. Default STYLE_FLAT.
         *     @type string   $open_on    One of Switcher::OPEN_*. Default OPEN_CLICK.
         *     @type bool     $show_flags Show flags. Default true.
         *     @type string   $label_mode One of SwitcherSettings::LABEL_*. Default native.
         *     @type string[] $languages  Subset of language codes, or [] for all enabled.
         *     @type bool     $in_menu    Render for a nav menu (wrap as <li>). Default false.
         *     @type bool     $hide_current Omit the active language (flat layout). Default false.
         *     @type string   $class      Extra class on the wrapper.
         * }
         *
         * @return string
         */
        public static function render(array $args = array()): string
        {
        }
        /**
         * Tags and attributes the switcher markup uses, for `wp_kses()` where it is echoed.
         *
         * Mirrors what the library renders with ACTION_LINK in every style: flat and
         * dropdown are lists of links (plus the toggle button), native is a form with a
         * <select> and a no-JS submit. Default post kses would strip parts of that.
         *
         * @since 1.2.0
         *
         * @return array
         */
        public static function allowed_html(): array
        {
        }
        /**
         * Render from a settings array keyed by {@see SwitcherSettings::fields()}.
         *
         * The adapter between the configuration surfaces - nav menu item, Customizer, block -
         * and this renderer's own argument names.
         *
         * @since 1.2.0
         *
         * @param array $settings Settings keyed by the schema.
         * @param bool  $in_menu  Render for a nav menu.
         * @param string $wrapper_class Extra wrapper class identifying the surface.
         *
         * @return string
         */
        public static function render_settings(array $settings, bool $in_menu = false, string $wrapper_class = ''): string
        {
        }
        /**
         * Render the language switcher as a shortcode.
         *
         * Attributes (all optional):
         *   style      flat|dropdown|native                          (default: flat)
         *   open_on    click|hover                                   (default: click)
         *   show_flags true|false                                    (default: true)
         *   label_mode native|english|code|code_name|none            (default: native)
         *   hide_current true|false  (flat only)                     (default: false)
         *
         * @since 1.2.0
         *
         * @param array|string $atts Shortcode attributes.
         *
         * @return string
         * @internal Shortcode callback.
         * @noinspection ReturnTypeCanBeDeclaredInspection
         */
        public static function render_shortcode($atts)
        {
        }
        /**
         * Turn language codes into library items.
         *
         * @since 1.2.0
         *
         * @param \TIV_GLOBUS\Core\Config   $config     Config instance.
         * @param string[] $languages  Subset of language codes, or [] for all enabled.
         * @param bool     $show_flags Attach flag classes.
         * @param string   $label_mode Resolved label mode.
         *
         * @return \TIV_GLOBUS\Dependencies\TIV\Switcher\Item[]
         */
        private static function build_items(\TIV_GLOBUS\Core\Config $config, array $languages, bool $show_flags, string $label_mode): array
        {
        }
        /**
         * The language to mark as the current one.
         *
         * The visitor's active language, except when the block editor is drawing a preview.
         * There it is the default language instead: the editor renders the block over the REST
         * API carrying the administrator's own admin-language cookie, which has nothing to do
         * with the page being edited. The default language is stable and is what the switcher
         * is set up around. This replaces the old `tiv_globus_language` query-arg mechanism.
         *
         * @since 1.2.0
         *
         * @param \TIV_GLOBUS\Core\Config $config Config instance.
         *
         * @return string
         */
        private static function current_language(\TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Is this render the block editor asking for a preview?
         *
         * Recognised by the REST route rather than by `is_admin()`, which is false during a
         * REST request. `ServerSideRender` and the inserter preview both come through
         * `/wp/v2/block-renderer/`, so one test covers the canvas and the inserter alike.
         *
         * @since 1.2.0
         *
         * @return bool
         */
        private static function is_editor_preview(): bool
        {
        }
        /**
         * Get the switcher URL for a given language.
         *
         * @since 1.2.0
         *
         * @param string $lang        Target language code.
         * @param string $current_url Current page URL.
         * @param \TIV_GLOBUS\Core\Config $config      Config instance.
         *
         * @return string
         */
        private static function get_url_for_language(string $lang, string $current_url, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Generate a URL for the current page entity in a specific language.
         *
         * @since 1.2.0
         *
         * @param string $lang   Target language code.
         * @param \TIV_GLOBUS\Core\Config $config Config instance.
         *
         * @return string|null URL with translated slugs, or null if not applicable.
         */
        private static function generate_entity_url(string $lang, \TIV_GLOBUS\Core\Config $config): ?string
        {
        }
        /**
         * The full descriptive label for the title / aria-label: native name plus code.
         *
         * Independent of the visible label mode, so a flags-only or code-only switcher still
         * announces "Deutsch (DE)" to a screen reader and shows it on hover.
         *
         * @since 1.2.0
         *
         * @param string $lang   Language code.
         * @param \TIV_GLOBUS\Core\Config $config Config instance.
         *
         * @return string
         */
        private static function full_label(string $lang, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Get the display label for a language.
         *
         * @since 1.2.0
         *
         * @param string $lang       Language code.
         * @param string $label_mode Label display mode.
         * @param \TIV_GLOBUS\Core\Config $config     Config instance.
         *
         * @return string
         */
        private static function label(string $lang, string $label_mode, \TIV_GLOBUS\Core\Config $config): string
        {
        }
    }
    /**
     * Class SwitcherSettings
     *
     * @since 1.2.0
     */
    class SwitcherSettings
    {
        /**
         * Label mode: the language's own name, e.g. "Deutsch".
         *
         * @var string
         */
        public const LABEL_NATIVE = 'native';
        /**
         * Label mode: the English name, e.g. "German".
         *
         * @var string
         */
        public const LABEL_ENGLISH = 'english';
        /**
         * Label mode: the uppercase code, e.g. "DE".
         *
         * @var string
         */
        public const LABEL_CODE = 'code';
        /**
         * Label mode: code and native name, e.g. "DE Deutsch".
         *
         * @var string
         */
        public const LABEL_CODE_NAME = 'code_name';
        /**
         * Label mode: no text, flags only.
         *
         * @var string
         */
        public const LABEL_NONE = 'none';
        /**
         * The schema.
         *
         * Built on demand rather than as a constant because the labels are translated, and a
         * translation fetched before `init` trips WordPress's "loaded too early" notice. The
         * consumers therefore call this on `init`.
         *
         * @since 1.2.0
         *
         * @return array
         */
        public static function fields(): array
        {
        }
        /**
         * The valid label-mode values, for sanitizing free input (shortcode attributes).
         *
         * @since 1.2.0
         *
         * @return string[]
         */
        public static function label_modes(): array
        {
        }
    }
    /**
     * Class SwitcherWidget
     *
     * WP_Widget::widget(), form(), update() have empty/passthrough parent implementations.
     *
     * @since 1.0.0
     */
    class SwitcherWidget extends \WP_Widget
    {
        /**
         * Widget ID base.
         */
        private const WIDGET_ID = 'tiv_globus_switcher';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Front-end display of the widget.
         *
         * @param array $args     Widget arguments.
         * @param array $instance Saved values from database.
         *
         * @noinspection PhpMissingParentCallCommonInspection
         */
        public function widget($args, $instance): void
        {
        }
        /**
         * Back-end widget form.
         *
         * @param array $instance Previously saved values.
         *
         * @noinspection PhpMissingParentCallCommonInspection
         */
        public function form($instance): void
        {
        }
        /**
         * Sanitize widget form values.
         *
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values.
         *
         * @return array Updated safe values.
         * @noinspection PhpMissingParentCallCommonInspection
         */
        public function update($new_instance, $old_instance): array
        {
        }
    }
}
namespace TIV_GLOBUS\WC {
    class Controller
    {
        public static function register(): void
        {
        }
    }
    /**
     * Class WCCart
     *
     * @since 1.0.0
     */
    class WCCart
    {
        /**
         * Register cart-related filters.
         */
        public static function register(): void
        {
        }
        /**
         * Filter cart item name.
         *
         * @param string $name      Item name.
         * @param array  $cart_item Cart item data.
         * @param string $cart_key  Cart item key.
         *
         * @return string
         *
         * @noinspection PhpUnusedParameterInspection — signature required by woocommerce_cart_item_name filter.
         */
        public static function filter_cart_item_name($name, $cart_item = array(), $cart_key = ''): string
        {
        }
        /**
         * Append current language to a WC cart fragment cache key.
         *
         * @param string $key Original key.
         *
         * @return string
         */
        public static function append_language_to_key(string $key): string
        {
        }
        /**
         * Filter any text.
         *
         * @param mixed $text Text to filter.
         *
         * @return mixed
         */
        public static function filter_text($text)
        {
        }
    }
    /**
     * Class WCEmail
     *
     * @since 1.0.0
     */
    class WCEmail
    {
        /**
         * Original language before email locale switch — to restore after.
         *
         * @var string|null
         */
        private static ?string $original_language = null;
        /**
         * Whether we've done the lazy locale switch for the current email.
         *
         * @var bool
         */
        private static bool $locale_switched = false;
        /**
         * Register email locale switching hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Hook retranslate filters for all registered customer email classes.
         *
         * Fires on woocommerce_init so all email classes (core + extensions) are registered.
         * Covers WC core, Subscriptions, and any third-party emails automatically.
         */
        public static function hook_retranslate_filters(): void
        {
        }
        /**
         * Suppress WC's site-locale switch for customer emails.
         *
         * WC calls setup_locale() at the START of trigger(), before $email->object
         * is set. We suppress the switch here and do a lazy switch later in
         * filter_email_format_string() when the order is available.
         *
         * @param bool      $allow Whether to allow WC's locale switch.
         * @param \WC_Email $email The email object.
         *
         * @return bool
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function suppress_wc_locale_switch($allow, $email): bool
        {
        }
        /**
         * Suppress WC's locale restore and do our own.
         *
         * @param bool      $allow Whether to allow WC's locale restore.
         * @param \WC_Email $email The email object.
         *
         * @return bool
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function suppress_wc_locale_restore($allow, $email): bool
        {
        }
        /**
         * Perform lazy locale switch for the current email and filter delimiters.
         *
         * Called from WCIntegration::filter_email_format_string() which hooks
         * woocommerce_email_format_string. On first call per email cycle,
         * determines the target language from the order and switches locale.
         * On every call, strips multilingual delimiters.
         *
         * @param \WC_Email $email The email object.
         */
        public static function maybe_switch_locale($email): void
        {
        }
        /**
         * Re-translate email subject or heading after the lazy locale switch.
         *
         * WC evaluates get_default_subject()/get_default_heading() BEFORE our lazy
         * locale switch fires in format_string(). This filter fires AFTER, so we
         * re-call the email's default getter with the now-correct locale.
         *
         * Works for both subject and heading: detects the current filter name to
         * call the appropriate default method.
         *
         * @param string    $formatted   Formatted string (with wrong-locale gettext).
         * @param object    $order_object The order object.
         * @param \WC_Email $email  The email object.
         *
         * @return string Re-translated string.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function retranslate_email_string($formatted, $order_object, $email): string
        {
        }
        /**
         * Re-filter gateway properties that were cached before our locale switch.
         *
         * Payment gateways cache `instructions`, `description`, and `title` at
         * constructor time (before the email locale switch). This hook runs just
         * before the gateway outputs its email instructions and re-filters the
         * cached properties using the current Config language.
         *
         * @param \WC_Order $order         Order object.
         * @param bool      $sent_to_admin Whether this is an admin email.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function refilter_gateway_properties($order, $sent_to_admin = false): void
        {
        }
        /**
         * Determine the target language for an email.
         *
         * - Customer order emails: use the order's stored locale.
         * - Admin emails: null (stay in admin language).
         * - Non-order customer emails (new account, reset password): null (site default).
         *
         * @param \WC_Email $email The email object.
         *
         * @return array{language: string, locale: string}|null Target, or null to not switch.
         */
        private static function determine_email_language($email): ?array
        {
        }
        /**
         * Resolve a WP locale to our language code.
         *
         * Checks locale_variant map first (e.g. en_CA → en), then falls back
         * to standard pattern (ru_RU → ru, fr_FR → fr).
         *
         * @param string $locale WP locale (e.g. 'ru_RU', 'en_CA').
         * @param \TIV_GLOBUS\Core\Config $config Config instance.
         *
         * @return string|null Language code, or null if not an enabled language.
         */
        private static function language_from_locale(string $locale, \TIV_GLOBUS\Core\Config $config): ?string
        {
        }
    }
    /**
     * Class WCIntegration
     *
     * @since 1.0.0
     */
    class WCIntegration
    {
        /**
         * Raw (multilingual) attribute labels, keyed by attribute_id.
         * Cached by filter_attribute_taxonomies() for merge-on-save.
         *
         * @var array<int,string>
         */
        private static array $raw_attribute_labels = array();
        /**
         * The product whose save() is running, for raw_texts_on_create().
         *
         * @since 1.3.0
         */
        private static ?\WC_Product $product_being_saved = null;
        /**
         * Remember the product that WC_Data::save() is about to write.
         *
         * @since 1.3.0
         *
         * @param mixed $product The product.
         */
        public static function remember_product_being_saved($product): void
        {
        }
        /**
         * Duplicated product: the "(Copy)" name in every language of the original.
         *
         * WooCommerce set the name to sprintf( '%s (Copy)', <one-language name> );
         * what it put around that name is applied to each language's name.
         *
         * @since 1.3.0
         *
         * @param mixed $duplicate The copy, not saved yet.
         * @param mixed $product   The original.
         */
        public static function multilingual_name_on_duplicate($duplicate, $product): void
        {
        }
        /**
         * New product insert data: raw (multilingual) name and descriptions.
         *
         * @since 1.3.0
         *
         * @param mixed $data wp_insert_post() arguments.
         *
         * @return mixed
         */
        public static function raw_texts_on_create($data)
        {
        }
        /**
         * Register attribute filters — safe for both admin and frontend.
         *
         * Admin needs these for product edit page attribute labels and variation dropdowns.
         */
        public static function register_attribute_filters(): void
        {
        }
        /**
         * Register frontend-only WooCommerce filters.
         */
        public static function register(): void
        {
        }
        /**
         * Filter product name — extract current language.
         *
         * @param string $name Product name.
         *
         * @return string
         */
        public static function filter_product_name($name): string
        {
        }
        /**
         * Filter any text field.
         *
         * @param mixed $text Text to filter.
         *
         * @return mixed
         */
        public static function filter_text($text)
        {
        }
        /**
         * Filter email format_string — lazy locale switch + delimiter extraction.
         *
         * On first call per email cycle, WCEmail::maybe_switch_locale() switches
         * Config language and WP locale to the order's language. Then delimiters
         * are stripped to that language. For admin previews (REST), falls back to
         * the editing language cookie.
         *
         * @param mixed    $text  Text to filter.
         * @param \WC_Email|null $email The email object (2nd param from WC filter).
         *
         * @return mixed
         */
        public static function filter_email_format_string($text, $email = null)
        {
        }
        /**
         * Filter shipping zone name on load — modifies the data prop directly
         * so that get_data() (used by the zone list table) returns filtered names.
         *
         * Skips during saves: the data store calls this after read, but during a
         * save cycle the zone is re-read; we must not strip the multilingual string
         * that's about to be written back.
         *
         * @param \WC_Shipping_Zone $zone The zone object.
         */
        public static function filter_zone_on_load($zone): void
        {
        }
        /**
         * Filter shipping method titles in zone list (JSON context).
         *
         * When WC serializes methods for the zone list JS, it reads raw object
         * properties (not get_title()), so the per-method filters don't fire.
         * This filter catches all methods regardless of type.
         *
         * @param array $methods Shipping method objects (stdClass in JSON context).
         *
         * @return array
         */
        public static function filter_zone_shipping_methods($methods)
        {
        }
        /**
         * Merge tax rate names before WC's AJAX save handler processes them.
         *
         * Tax rates save via Backbone AJAX (not form POST), so the JS submit
         * handler doesn't fire. This hook runs at priority 1 (before WC at 10)
         * and modifies $_POST['changes'] to merge single-language edits into
         * multilingual strings using the existing DB values.
         */
        public static function merge_tax_rate_names_on_save(): void
        {
        }
        /**
         * Filter attribute taxonomy objects — translate attribute_label at the source.
         *
         * Also caches raw (multilingual) labels for merge-on-save.
         *
         * @param array $taxonomies Array of attribute taxonomy objects from DB.
         *
         * @return array
         */
        public static function filter_attribute_taxonomies($taxonomies)
        {
        }
        /**
         * Merge attribute label on save — preserve other languages.
         *
         * WC writes the single-language label from the form. We re-read,
         * merge with cached multilingual string, and update the DB.
         *
         * @param int    $id       Attribute ID.
         * @param array  $data     Attribute data that was written.
         * @param string $old_slug Old attribute slug.
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function merge_attribute_on_update($id, $data, $old_slug = ''): void
        {
        }
        /**
         * Filter custom (non-taxonomy) attribute values on the product page.
         *
         * WC builds the HTML from raw get_options() with no per-value filter.
         * We rebuild it when any value contains delimiters.
         *
         * @param string                $html      The attribute HTML.
         * @param \WC_Product_Attribute $attribute The attribute object.
         * @param array                 $values    The attribute values (raw strings for custom, term IDs for taxonomy).
         *
         * @return string
         */
        public static function filter_attribute_values($html, $attribute, $values)
        {
        }
        /**
         * Filter the attribute edit form — WC reads label from $wpdb (bypasses our filter).
         *
         * Injects inline JS to extract the current language from the input value.
         */
        public static function filter_edit_attribute_form(): void
        {
        }
        /**
         * Show a hint on the WC "Add new attribute" form in a non-default language.
         */
        public static function warn_non_default_attribute_add(): void
        {
        }
        /**
         * Fix product_brand taxonomy rewrite slug.
         *
         * WC Brands uses __('brand', 'woocommerce') as the default rewrite slug.
         * When the current locale is non-English, this returns a translated string
         * (e.g. 'бренд' for Russian), creating locale-dependent taxonomy URLs.
         * Force the untranslated slug so URLs are consistent across languages.
         *
         * @param array $args Taxonomy registration args.
         *
         * @return array
         */
        public static function fix_brand_rewrite_slug(array $args): array
        {
        }
        /**
         * No-op placeholder for hooks that need registration but no transformation yet.
         *
         * @param mixed $value Passthrough value.
         *
         * @return mixed
         */
        public static function noop($value)
        {
        }
    }
    /**
     * Class WCOptionFilter
     *
     * @since 1.0.0
     */
    class WCOptionFilter
    {
        /**
         * WC options that are plain strings with multilingual delimiters.
         *
         * @var string[]
         */
        public const TRANSLATABLE_OPTIONS = array(
            // WC core.
            'woocommerce_store_address',
            'woocommerce_store_address_2',
            'woocommerce_price_display_suffix',
            'woocommerce_email_footer_text',
            'woocommerce_demo_store_notice',
            'woocommerce_checkout_privacy_policy_text',
            'woocommerce_registration_privacy_policy_text',
            'woocommerce_checkout_terms_and_conditions_checkbox_text',
            // WC Subscriptions (hooks are harmless if plugin is not active).
            'woocommerce_subscriptions_add_to_cart_button_text',
            'woocommerce_subscriptions_order_button_text',
            'woocommerce_subscriptions_switch_button_text',
            'woocommerce_subscriptions_gifting_gifting_checkbox_text',
        );
        /**
         * WC options stored as associative arrays — filter/merge specific keys.
         * Format: option_name => [ translatable_key, ... ]
         *
         * @var array<string, string[]>
         */
        public const TRANSLATABLE_ASSOC_OPTIONS = array('woocommerce_pickup_location_settings' => array('title'), 'woocommerce_bacs_settings' => array('title', 'description', 'instructions'), 'woocommerce_cheque_settings' => array('title', 'description', 'instructions'), 'woocommerce_cod_settings' => array('title', 'description', 'instructions'));
        /**
         * Shipping method option keys that may contain multilingual delimiters.
         *
         * @var string[]
         */
        public const SHIPPING_TRANSLATABLE_KEYS = array('title');
        /**
         * WC options stored as indexed arrays of objects — filter/merge specific keys in each element.
         * Format: option_name => [ translatable_key, ... ]
         *
         * @var array<string, string[]>
         */
        public const TRANSLATABLE_LIST_OPTIONS = array('pickup_location_pickup_locations' => array('name', 'details'));
        /**
         * Register option filters for both admin and frontend.
         */
        public static function register(): void
        {
        }
        // ── String options ───────────────────────────────────────────────
        /**
         * Filter option value — extract current language.
         *
         * @param mixed $value Option value.
         *
         * @return mixed
         */
        public static function filter_option($value)
        {
        }
        /**
         * Merge-on-save — preserve other languages when saving a single-language value.
         *
         * @param mixed  $value     The new value about to be saved.
         * @param mixed  $old_value The old value (already filtered — not raw).
         * @param string $option    The option name.
         *
         * @return mixed
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function merge_option($value, $old_value, $option)
        {
        }
        // ── Shipping method options ──────────────────────────────────────
        /**
         * Regex pattern matching shipping method instance option names.
         * Generic: matches any `woocommerce_{method}_{N}_settings` regardless of method type.
         *
         * @var string
         */
        public const SHIPPING_OPTION_PATTERN = '/^woocommerce_\w+_\d+_settings$/';
        /**
         * Merge-on-save for shipping method instance settings (dynamic option names).
         *
         * Hooks the generic `pre_update_option` because instance option names are dynamic
         * (e.g. `woocommerce_flat_rate_1_settings`) and cannot be registered individually.
         *
         * @param mixed  $value  The new value about to be saved.
         * @param string $option The option name.
         * @param mixed  $old    The old value (already filtered — not raw).
         *
         * @return mixed
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function merge_shipping_instance_option($value, $option, $old)
        {
        }
        // ── Associative array options ────────────────────────────────────
        /**
         * Filter an associative array option — extract current language from translatable keys.
         *
         * @param mixed $value Option value.
         *
         * @return mixed
         */
        public static function filter_assoc_option($value)
        {
        }
        /**
         * Merge-on-save for an associative array option — merge translatable keys.
         *
         * @param mixed  $value     The new value about to be saved.
         * @param mixed  $old_value The old value (already filtered — not raw).
         * @param string $option    The option name.
         *
         * @return mixed
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function merge_assoc_option($value, $old_value, $option)
        {
        }
        // ── Indexed list options ─────────────────────────────────────────
        /**
         * Filter an indexed array option — extract current language from translatable keys in each element.
         *
         * @param mixed $value Option value.
         *
         * @return mixed
         */
        public static function filter_list_option($value)
        {
        }
        /**
         * Merge-on-save for an indexed array option — merge translatable keys in each element.
         *
         * Matches elements by array index. If locations are added or deleted in the same
         * save, translations for shifted elements may need re-entering.
         *
         * @param mixed  $value     The new value about to be saved.
         * @param mixed  $old_value The old value (already filtered — not raw).
         * @param string $option    The option name.
         *
         * @return mixed
         *
         * @noinspection PhpUnusedParameterInspection
         */
        public static function merge_list_option($value, $old_value, $option)
        {
        }
        // ── Shared merge logic ───────────────────────────────────────────
        /**
         * Merge a single-language value into a multilingual string.
         *
         * Same logic as TermEditor::merge_term_field().
         *
         * @since 1.0.1 Delegates to the canonical TextFilter::merge_field().
         *
         * @param string $new_value    The single-language value from the form.
         * @param string $db_value     The raw DB value (with all translations).
         * @param string $editing_lang The language being edited.
         * @param \TIV_GLOBUS\Core\Config $config       Config instance.
         *
         * @return string|null Merged value, or null if no merge needed.
         */
        public static function merge_field(string $new_value, string $db_value, string $editing_lang, \TIV_GLOBUS\Core\Config $config): ?string
        {
        }
        // ── Context helpers ──────────────────────────────────────────────
        /**
         * Whether the current request is an admin save context.
         *
         * Covers both traditional form POST (is_admin) and REST API saves
         * (WC pickup locations, block editor, etc.).
         *
         * @return bool
         */
        public static function is_admin_save_context(): bool
        {
        }
        // ── Raw DB access ────────────────────────────────────────────────
        /**
         * Read the raw option value from DB, bypassing all filters.
         *
         * @param string $option_name The option name.
         *
         * @return string|null Raw value, or null if not found.
         */
        private static function get_raw_option_value(string $option_name): ?string
        {
        }
        /**
         * Read a raw array option from DB, bypassing all filters.
         *
         * @param string $option_name The option name.
         *
         * @return array|null Unserialized array, or null if not found/not array.
         */
        public static function get_raw_array_option(string $option_name): ?array
        {
        }
        // ── Admin notices ────────────────────────────────────────────────
        /**
         * Queue an admin notice about a missing default language translation.
         *
         * Uses a transient because WC redirects after save, so the notice
         * must survive the redirect.
         *
         * @param string $option_name     The option that was saved.
         * @param string $default_language The default language code.
         */
        private static function queue_missing_default_notice(string $option_name, string $default_language): void
        {
        }
        /**
         * Display queued admin notices about missing default language translations.
         */
        public static function display_notices(): void
        {
        }
    }
    /**
     * Class WCOrder
     *
     * @since 1.0.0
     */
    class WCOrder
    {
        /**
         * Order meta key for the language at order time.
         */
        public const META_ORDER_LOCALE = '_tiv_globus_order_locale';
        /**
         * Register order-related hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Save the current language/locale to order meta.
         *
         * @param \WC_Order $order The order being created.
         */
        public static function save_order_locale($order): void
        {
        }
        /**
         * Get the locale saved with an order.
         *
         * @param int $order_id Order ID.
         *
         * @return string Locale string, or empty if not set.
         */
        public static function get_order_locale(int $order_id): string
        {
        }
        /**
         * Filter order item name — extract current language.
         *
         * @param string $name Item name.
         *
         * @return string
         */
        public static function filter_order_item_name($name): string
        {
        }
        /**
         * Filter order note content — extract current language from any embedded delimiters.
         *
         * @param array $note_data Order note data array.
         *
         * @return array
         */
        public static function filter_order_note($note_data)
        {
        }
    }
    /**
     * Class WCSettingsIntercept
     *
     * @since 1.0.0
     */
    class WCSettingsIntercept
    {
        /**
         * Fields that should be filtered for display only — no merge on save.
         * Values are field name attributes. On submit, raw multilingual values are restored.
         *
         * @var string[]
         */
        private const DISPLAY_ONLY_FIELDS = array('woocommerce_tax_classes');
        /**
         * Field name suffixes to skip entirely — no display filter, no merge.
         * These are non-translatable fields (email addresses, technical settings).
         *
         * @var string[]
         */
        private const SKIP_FIELD_SUFFIXES = array('_recipient', '_cc', '_bcc');
        /**
         * Script handle for the text-filter JS library.
         */
        private const TEXT_FILTER_HANDLE = 'tiv-globus-text-filter';
        /**
         * Script handle for the WC settings intercept.
         */
        private const INTERCEPT_HANDLE = 'tiv-globus-wc-settings-intercept';
        /**
         * Register the settings intercept JS on WC admin pages.
         */
        public static function register(): void
        {
        }
        /**
         * Print inline CSS that hides form field text until JS scans for delimiters.
         * Uses admin_head to guarantee it's in <head> before any form content renders.
         */
        public static function print_mask_style(): void
        {
        }
        /**
         * Enqueue the settings intercept JS on WC settings pages.
         *
         * @param string $hook_suffix Current admin page hook suffix.
         */
        public static function enqueue_intercept_scripts(string $hook_suffix): void
        {
        }
    }
    /**
     * Class WCSettingsPage
     *
     * @since 1.0.0
     */
    class WCSettingsPage extends \WC_Settings_Page
    {
        /**
         * Tab slug used in the WC Settings URL.
         *
         * @var string
         */
        public const TAB_SLUG = 'tiv_globus';
        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Return the settings fields for this tab.
         *
         * @since 1.0.0
         *
         * @param array  $settings   Existing settings (empty for our tab).
         * @param string $section_id Current section ID.
         *
         * @return array
         */
        public function get_settings_fields($settings, $section_id): array
        {
        }
    }
    /**
     * Class WCShopSlug
     *
     * @since 1.0.0
     */
    class WCShopSlug
    {
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Convert a shop page query into a product archive query.
         *
         * When our slug resolver normalizes a translated slug to pagename=shop,
         * WP creates a regular page query. WC needs a product archive query
         * for is_shop(), the product loop, pagination, sorting, etc. to work.
         *
         * Only fires on frontend, main query, non-default language.
         *
         * @param \WP_Query $q The query object.
         */
        public static function convert_shop_page_to_archive($q): void
        {
        }
        /**
         * Redirect /ru/shop/ to /ru/shop_ru/ when a translated slug exists.
         *
         * Prevents duplicate content: the default slug should not be accessible
         * in a non-default language if a translated slug is available.
         */
        public static function redirect_to_translated_slug(): void
        {
        }
    }
}
namespace TIV_GLOBUS\Yoast {
    class Controller
    {
        public static function register(): void
        {
        }
    }
    /**
     * Class YoastAdmin
     *
     * @since 1.0.0
     */
    class YoastAdmin
    {
        /**
         * Register admin-side Yoast field handling.
         */
        public static function register(): void
        {
        }
        /**
         * Filter title for Yoast analysis in admin.
         *
         * @param string $title The Yoast title.
         *
         * @return string
         */
        public static function filter_admin_title($title): string
        {
        }
        /**
         * Filter description for Yoast analysis in admin.
         *
         * @param string $desc The Yoast description.
         *
         * @return string
         */
        public static function filter_admin_description($desc): string
        {
        }
    }
    /**
     * Class YoastIntegration
     *
     * @since 1.0.0
     */
    class YoastIntegration
    {
        /**
         * Register llms.txt post-processing - called universally (admin, frontend, cron, WP-CLI).
         *
         * Yoast generates llms.txt in admin/REST context and from its weekly cron event
         * (wpseo_llms_txt_population), which may run under WP-CLI. Runs on shutdown so the
         * file is already written. Exits fast when no file or no delimiters.
         */
        public static function register_llms_txt_filter(): void
        {
        }
        /**
         * Register Yoast SEO filters (frontend only).
         */
        public static function register(): void
        {
        }
        /**
         * Focus keyphrase in Yoast's admin-bar menu: current-language text.
         *
         * @since 1.3.0
         *
         * @param mixed $wp_admin_bar WP_Admin_Bar.
         */
        public static function filter_admin_bar_focus_keyword($wp_admin_bar): void
        {
        }
        /**
         * Focus keyphrase in Yoast Premium's Frontend inspector script data.
         *
         * @since 1.3.0
         */
        public static function filter_frontend_inspector_data(): void
        {
        }
        /**
         * Product archive link in the XML sitemap: the shop page permalink.
         *
         * @since 1.3.0
         *
         * @param mixed  $link      Archive URL, or false to skip it.
         * @param string $post_type Post type.
         *
         * @return mixed
         */
        public static function filter_sitemap_archive_link($link, $post_type = '')
        {
        }
        /**
         * Yoast dynamic permalinks on non-default-language front-end requests.
         *
         * @since 1.3.0
         *
         * @param mixed $enabled Yoast option value.
         *
         * @return mixed
         */
        public static function dynamic_permalinks_for_language($enabled)
        {
        }
        /**
         * Raw stored value of an indexable field (custom SEO title, etc.).
         *
         * The filtered output strings cannot tell a custom value from a
         * template-generated one, so decisions are made on the raw value.
         *
         * @param mixed  $presentation Yoast Indexable_Presentation.
         * @param string $field        Indexable column, e.g. 'title', 'description'.
         *
         * @return string
         */
        private static function model_raw($presentation, string $field): string
        {
        }
        /**
         * Whether a custom value exists for the field but not for the current language.
         *
         * A plain (undelimited) value belongs to the default language - see YoastMeta.
         *
         * @param mixed  $presentation Yoast Indexable_Presentation.
         * @param string $field        Indexable column.
         *
         * @return bool
         */
        private static function model_lacks_language($presentation, string $field): bool
        {
        }
        /**
         * Current-language part of a string; plain strings pass through.
         *
         * @param mixed $text Text.
         *
         * @return string
         */
        public static function current_language_text($text): string
        {
        }
        /**
         * Yoast's raw generated value of a presentation property, variables replaced.
         *
         * @param mixed  $presentation Yoast Indexable_Presentation.
         * @param string $property     'title' or 'meta_description'.
         *
         * @return string
         */
        private static function presentation_text($presentation, string $property): string
        {
        }
        /**
         * Render the Yoast search-appearance template (Settings > Content types /
         * Categories & tags) for the object of a presentation.
         *
         * Used when a custom SEO title / description exists in other languages
         * only: the current language then gets what Yoast would show with no
         * custom value - its template, rendered with the translated post data.
         *
         * @param mixed  $presentation Yoast Indexable_Presentation.
         * @param string $type         'title' or 'metadesc'.
         *
         * @return string
         */
        private static function render_template($presentation, string $type): string
        {
        }
        /**
         * Filter Yoast title — extract current language.
         *
         * A custom title saved for other languages only falls back to the Yoast
         * template (not to another language's text).
         *
         * @param string $title        The meta title.
         * @param mixed  $presentation Yoast presentation (optional, from the filter).
         *
         * @return string
         */
        public static function filter_title($title, $presentation = null): string
        {
        }
        /**
         * Filter Yoast meta description — extract current language.
         *
         * A custom description saved for other languages only falls back to the
         * Yoast template, which may be empty (= no meta description).
         *
         * @param string $desc         The meta description.
         * @param mixed  $presentation Yoast presentation (optional, from the filter).
         *
         * @return string
         */
        public static function filter_meta_desc($desc, $presentation = null): string
        {
        }
        /**
         * Social appearance template for the object of a presentation, rendered.
         *
         * Yoast Premium adds these templates (Settings > Content types > Social
         * appearance) through the `Yoast\WP\SEO\open_graph_{title|description}_{type}`
         * filters. Without Premium the filters return the empty default.
         *
         * @param mixed  $presentation Yoast Indexable_Presentation.
         * @param string $type         'title' or 'description'.
         *
         * @return string Rendered template in the current language, or '' when none.
         */
        private static function social_template($presentation, string $type): string
        {
        }
        /**
         * Filter OpenGraph title.
         *
         * Order, as in Yoast: custom social title, then the social template
         * (Premium), then the SEO title - each for the current language.
         *
         * @param string $title        OG title.
         * @param mixed  $presentation Yoast presentation.
         *
         * @return string
         */
        public static function filter_og_title($title, $presentation = null): string
        {
        }
        /**
         * Filter OpenGraph description - same order as the title.
         *
         * @param string $desc         OG description.
         * @param mixed  $presentation Yoast presentation.
         *
         * @return string
         */
        public static function filter_og_desc($desc, $presentation = null): string
        {
        }
        /**
         * Filter X (Twitter) title.
         *
         * Missing in the current language: empty, so Yoast omits the tag and X
         * uses the (per-language) OpenGraph values.
         *
         * @param string $text         The text.
         * @param mixed  $presentation Yoast presentation.
         *
         * @return string
         */
        public static function filter_twitter_title($text, $presentation = null): string
        {
        }
        /**
         * Filter X (Twitter) description - same rule as the title.
         *
         * @param string $text         The text.
         * @param mixed  $presentation Yoast presentation.
         *
         * @return string
         */
        public static function filter_twitter_description($text, $presentation = null): string
        {
        }
        /**
         * Filter canonical URL — add language prefix and translated slugs.
         *
         * Yoast builds the canonical from the permalink stored in its indexable,
         * which always carries the default-language slugs. Re-prefixing alone
         * gives `/es/<english-slug>/`, a URL that only redirects. The slugs of
         * the queried post / term are swapped with the same helpers that filter
         * get_permalink() and get_term_link().
         *
         * @param string $canonical The canonical URL.
         *
         * @return string
         */
        public static function filter_canonical($canonical): string
        {
        }
        /**
         * Swap default-language slugs of the queried object for translated ones.
         *
         * @param string $url    URL (already language-prefixed).
         * @param \TIV_GLOBUS\Core\Config $config Config.
         *
         * @return string
         */
        private static function translate_queried_object_slugs(string $url, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Generate hreflang tags for all enabled languages.
         *
         * @param string $url Base URL (without language prefix).
         *
         * @return array<string, string> Locale => URL pairs.
         */
        public static function get_hreflang_urls(string $url): array
        {
        }
        /**
         * Filter Yoast schema JSON-LD piece.
         *
         * Yoast builds schema from raw post data and internal permalink calls,
         * often bypassing our text and URL filters. This:
         * - Strips delimiters from text values (names, headlines, keywords).
         * - Localizes URL strings (adds language prefix, swaps translated slugs).
         *
         * @param array $piece Schema piece (WebPage, Article, BreadcrumbList, etc.).
         *
         * @return array
         */
        public static function filter_schema_piece($piece)
        {
        }
        /**
         * Breadcrumb trail: current-language text of each crumb.
         *
         * Yoast takes the crumb text from the indexable's breadcrumb_title, which its
         * builder stores ONCE, from the post title / term name as filtered in whatever
         * language the building request had, and the URL from the stored
         * default-language permalink. So post, term and post type archive crumbs are
         * re-read from their source here.
         *
         * @param mixed $links Crumbs: arrays with 'text' (and 'url' / 'id' / 'term_id' / 'ptarchive').
         *
         * @return mixed
         */
        public static function filter_breadcrumb_links($links)
        {
        }
        /**
         * Text and URL of a post / term / post type archive crumb, read from its source.
         *
         * A custom breadcrumb title wins when it has the current language
         * (a plain value belongs to the default language - see YoastMeta).
         *
         * @since 1.3.0
         *
         * @param array $link Crumb.
         *
         * @return array{text?: string, url?: string} Missing keys: keep Yoast's value.
         */
        private static function crumb_source(array $link): array
        {
        }
        /**
         * Filter Yoast schema WebPage piece.
         *
         * Its `name` / `description` are the SEO title / meta description: resolve
         * them like the meta tags (template fallback for a missing language), then
         * run the generic piece filter.
         *
         * @param array $piece   WebPage schema piece.
         * @param mixed $context Yoast Meta_Tags_Context.
         *
         * @return array
         */
        public static function filter_schema_webpage($piece, $context = null)
        {
        }
        /**
         * Filter Yoast schema breadcrumb — translate names and localize URLs.
         *
         * Breadcrumb items have plain EN names (from Yoast's internal title chain)
         * and EN URLs. We re-generate names from the actual post/term objects and
         * localize all URLs.
         *
         * @param array $piece BreadcrumbList schema piece.
         *
         * @return array
         */
        public static function filter_schema_breadcrumb($piece)
        {
        }
        /**
         * Post-process Yoast's llms.txt file after generation.
         *
         * Yoast writes llms.txt from raw DB data with no content filters.
         * This reads the file after write, strips delimiters (default language),
         * and writes it back.
         */
        public static function filter_llms_txt_file(): void
        {
        }
        /**
         * Add hreflang presenter to Yoast's frontend presenters.
         *
         * @param array $presenters Array of presenter class names.
         *
         * @return array
         */
        public static function add_hreflang_presenter($presenters): array
        {
        }
        /**
         * Output hreflang <link> tags in <head>.
         */
        public static function output_hreflang_tags(): void
        {
        }
    }
    /**
     * Class YoastMeta
     *
     * @since 1.3.0
     */
    class YoastMeta
    {
        /**
         * Yoast post meta keys that hold translatable text.
         *
         * @var string[]
         */
        public const META_KEYS = array(
            '_yoast_wpseo_title',
            '_yoast_wpseo_metadesc',
            '_yoast_wpseo_focuskw',
            '_yoast_wpseo_bctitle',
            '_yoast_wpseo_opengraph-title',
            '_yoast_wpseo_opengraph-description',
            '_yoast_wpseo_twitter-title',
            '_yoast_wpseo_twitter-description',
            // Yoast Premium: keyphrase synonyms and related keyphrases (JSON, one per language).
            '_yoast_wpseo_keywordsynonyms',
            '_yoast_wpseo_focuskeywords',
        );
        /**
         * Yoast term SEO keys (option `wpseo_taxonomy_meta`) that hold translatable text.
         * Same names in the term edit form POST.
         *
         * Not the Premium `wpseo_keywordsynonyms` / `wpseo_focuskeywords`: Yoast's
         * term sanitizer json_decode()s them and keeps the old value when that
         * fails, so a multilingual string would never be saved.
         *
         * @var string[]
         */
        public const TERM_KEYS = array('wpseo_title', 'wpseo_desc', 'wpseo_focuskw', 'wpseo_bctitle', 'wpseo_opengraph-title', 'wpseo_opengraph-description', 'wpseo_twitter-title', 'wpseo_twitter-description');
        /**
         * Yoast's option for term SEO data.
         *
         * @var string
         */
        private const TAXONOMY_META_OPTION = 'wpseo_taxonomy_meta';
        /**
         * True while Yoast's metabox save (WPSEO_Metabox::save_postdata) runs.
         *
         * @var bool
         */
        private static $in_metabox_save = false;
        /**
         * Editing language sent by the block editor with a REST request
         * (`_tiv_globus_language`). REST URLs are outside the admin cookie path,
         * so the cookie is not available there.
         *
         * @var string
         */
        private static $rest_language = '';
        /**
         * Register hooks (admin only).
         */
        public static function register(): void
        {
        }
        /**
         * Term save: merge the edited language into the stored term SEO values.
         *
         * Rewrites the submitted `wpseo_*` fields in $_POST to the merged
         * multilingual value just before Yoast's update_term() reads them.
         *
         * @param int    $term_id  Term ID.
         * @param int    $tt_id    Term taxonomy ID.
         * @param string $taxonomy Taxonomy.
         *
         * @noinspection PhpUnusedParameterInspection - WP hook signature.
         */
        public static function merge_term_post_data($term_id, $tt_id, $taxonomy): void
        {
        }
        /**
         * Term edit screen: show the editing-language part of the Yoast term values.
         *
         * @param mixed $value Option value.
         *
         * @return mixed
         */
        public static function filter_taxonomy_meta_for_editor($value)
        {
        }
        /**
         * Remember the editing language sent with a REST request.
         *
         * @param mixed            $result  Pre-dispatch result (passed through).
         * @param \WP_REST_Server  $server  Server.
         * @param \WP_REST_Request $request Request.
         *
         * @return mixed
         *
         * @noinspection PhpUnusedParameterInspection - WP hook signature.
         */
        public static function capture_rest_language($result, $server, $request)
        {
        }
        /**
         * Yoast metabox save started.
         */
        public static function start_metabox_save(): void
        {
        }
        /**
         * Yoast metabox save finished.
         */
        public static function end_metabox_save(): void
        {
        }
        /**
         * The language the metabox was edited in.
         *
         * Classic editor posts the hidden `tiv_globus_language` field; the block
         * editor's metabox request does not, so fall back to the detected editing
         * language (admin cookie / referer).
         *
         * @return string
         */
        private static function editing_language(): string
        {
        }
        /**
         * Merge the edited language into the stored value on update.
         *
         * @param null|bool $check      Null to proceed, non-null to short-circuit.
         * @param int       $object_id  Post ID.
         * @param string    $meta_key   Meta key.
         * @param mixed     $meta_value New (sanitized, unslashed) value.
         *
         * @return null|bool
         */
        public static function merge_on_update($check, $object_id, $meta_key, $meta_value)
        {
        }
        /**
         * Merge the edited language into the stored value on add.
         *
         * @param null|bool $check      Null to proceed, non-null to short-circuit.
         * @param int       $object_id  Post ID.
         * @param string    $meta_key   Meta key.
         * @param mixed     $meta_value New (sanitized, unslashed) value.
         *
         * @return null|bool
         */
        public static function merge_on_add($check, $object_id, $meta_key, $meta_value)
        {
        }
        /**
         * Shared merge for add/update.
         *
         * @param null|bool $check      Incoming short-circuit value.
         * @param int       $post_id    Post ID.
         * @param string    $meta_key   Meta key.
         * @param mixed     $meta_value New value (single language).
         *
         * @return null|bool
         */
        private static function merge($check, int $post_id, string $meta_key, $meta_value)
        {
        }
        /**
         * Keep Yoast from deleting the value we just handled.
         *
         * WPSEO_Meta::remove_meta_if_default() (update_post_metadata, 10) ignores
         * the short-circuit value: for a field submitted empty in one language it
         * deletes the whole multilingual value - all other languages included.
         * Remove it for the current update call and put it back right after
         * (priority 11 of the same filter run).
         */
        private static function skip_yoast_default_removal_once(): void
        {
        }
        /**
         * Merge one language value into a stored (plain or multilingual) value.
         *
         * Unlike TextFilter::merge_field(), never copies the edited value into
         * the default language: an SEO title typed in Spanish must not become
         * the English SEO title. Languages without a value fall back to the
         * Yoast template on the front end.
         *
         * @param string $new_value    Value typed in the editing language ('' = cleared).
         * @param string $stored       Stored value.
         * @param string $editing_lang Editing language.
         * @param \TIV_GLOBUS\Core\Config $config       Config.
         *
         * @return string Value to store ('' = delete).
         */
        public static function merge_value(string $new_value, string $stored, string $editing_lang, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * The part of a stored value that belongs to one language.
         *
         * A plain (undelimited) value is the default language's value - the same
         * rule merge_value() uses. Missing = '' (Yoast then uses its template).
         *
         * @param string $stored Stored value.
         * @param string $lang   Language.
         * @param \TIV_GLOBUS\Core\Config $config Config.
         *
         * @return string
         */
        public static function value_for_language(string $stored, string $lang, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * Whether a stored (raw) value has a custom value for the language.
         *
         * Empty = no custom value at all (Yoast template applies everywhere).
         *
         * @param string $stored Stored value.
         * @param string $lang   Language.
         * @param \TIV_GLOBUS\Core\Config $config Config.
         *
         * @return bool True when a custom value exists but not for $lang.
         */
        public static function lacks_language(string $stored, string $lang, \TIV_GLOBUS\Core\Config $config): bool
        {
        }
        /**
         * Raw stored meta value, bypassing our read filter and the object cache.
         *
         * @param int    $post_id  Post ID.
         * @param string $meta_key Meta key.
         *
         * @return string
         */
        private static function get_raw(int $post_id, string $meta_key): string
        {
        }
        /**
         * Write (or delete) the merged value without re-entering the merge.
         *
         * @param int    $post_id  Post ID.
         * @param string $meta_key Meta key.
         * @param string $value    Value; '' deletes.
         */
        private static function write_raw(int $post_id, string $meta_key, string $value): void
        {
        }
        /**
         * Whether the current request renders the post editor (not a save).
         *
         * @return bool
         */
        private static function is_editor_display(): bool
        {
        }
        /**
         * Whether this is a logged-in REST request (the block editor's data layer).
         *
         * The editor preloads and saves the post through REST; its `meta` field
         * carries the Yoast values, which Yoast copies into its own fields.
         *
         * @return bool
         */
        private static function is_rest_editor_request(): bool
        {
        }
        /**
         * Whether Yoast is building an indexable right now.
         *
         * Indexables must be built from the raw multilingual value, never from
         * the editing-language extract.
         *
         * @return bool
         */
        private static function is_yoast_builder_running(): bool
        {
        }
        /**
         * Editor display: return the editing-language part of the Yoast text meta.
         *
         * Yoast reads its values with get_post_custom() (meta key ''), and some
         * code with get_post_meta( $id, $key ). Both are handled.
         *
         * @param mixed  $value     Short-circuit value (null = not filtered).
         * @param int    $object_id Post ID.
         * @param string $meta_key  Meta key ('' = all).
         * @param bool   $single    Single value requested.
         *
         * @return mixed
         */
        public static function filter_get_for_editor($value, $object_id, $meta_key, $single)
        {
        }
    }
    /**
     * Class YoastSettings
     *
     * @since 1.3.0
     */
    class YoastSettings
    {
        /**
         * Yoast's settings page slug (Yoast\WP\SEO\Integrations\Settings_Integration::PAGE).
         *
         * @var string
         */
        public const PAGE = 'wpseo_page_settings';
        /**
         * The option holding the translatable texts.
         *
         * @var string
         */
        private const OPTION = 'wpseo_titles';
        /**
         * Translatable keys of `wpseo_titles`, exact names.
         *
         * @var string[]
         */
        private const TEXT_KEYS = array('website_name', 'alternate_website_name', 'company_name', 'company_alternate_name', 'person_name', 'org-description', 'org-legal-name', 'open_graph_frontpage_title', 'open_graph_frontpage_desc', 'breadcrumbs-404crumb', 'breadcrumbs-archiveprefix', 'breadcrumbs-home', 'breadcrumbs-prefix', 'breadcrumbs-searchprefix', 'rssbefore', 'rssafter');
        /**
         * Translatable keys of `wpseo_titles`, by prefix (one per content type,
         * taxonomy or special page).
         *
         * @var string[]
         */
        private const TEXT_KEY_PREFIXES = array('title-', 'metadesc-', 'social-title-', 'social-description-', 'bctitle-ptarchive-');
        /**
         * Register hooks.
         */
        public static function register(): void
        {
        }
        /**
         * Whether this request shows the Yoast settings page.
         *
         * @return bool
         */
        public static function is_settings_view(): bool
        {
        }
        /**
         * Whether this request saves the Yoast settings page (options.php POST).
         *
         * @return bool
         */
        private static function is_settings_save(): bool
        {
        }
        /**
         * Whether a `wpseo_titles` key holds translatable text.
         *
         * @param string $key Option key.
         *
         * @return bool
         */
        public static function is_text_key(string $key): bool
        {
        }
        /**
         * Settings page: show the editing-language part of each text.
         *
         * A language without its own text shows the default language's text,
         * as Settings > General does; merge_on_save() keeps such an untouched
         * field as it is.
         *
         * @param mixed $value Option value.
         *
         * @return mixed
         */
        public static function filter_option_for_editing($value)
        {
        }
        /**
         * Settings save: merge each submitted text into the stored value.
         *
         * @param mixed $value New option value (single-language texts).
         *
         * @return mixed
         */
        public static function merge_on_save($value)
        {
        }
        /**
         * What the settings page shows for a stored text in a language.
         *
         * @param string $stored Stored value.
         * @param string $lang   Editing language.
         * @param \TIV_GLOBUS\Core\Config $config Config.
         *
         * @return string
         */
        public static function display_value(string $stored, string $lang, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * The value to store for one submitted text.
         *
         * Yoast submits every field on every save: a field the user did not touch
         * comes back exactly as displayed - keep the stored value then, so the
         * default-language fallback is never copied into the editing language.
         *
         * @param string $submitted Submitted value (editing language).
         * @param string $stored    Stored value (all languages).
         * @param string $lang      Editing language.
         * @param \TIV_GLOBUS\Core\Config $config    Config.
         *
         * @return string
         */
        public static function resolve_value(string $submitted, string $stored, string $lang, \TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * The language being edited on the settings page.
         *
         * @param \TIV_GLOBUS\Core\Config $config Config.
         *
         * @return string
         */
        private static function editing_language(\TIV_GLOBUS\Core\Config $config): string
        {
        }
        /**
         * The stored option, bypassing all filters and caches.
         *
         * @return array
         */
        private static function get_raw_option(): array
        {
        }
        /**
         * Keep the settings sub-page (`#/site-representation` etc.) when the
         * admin-bar "Edit in:" switcher reloads the page in another language.
         * The hash never reaches the server, so the links cannot carry it.
         */
        public static function print_keep_hash_script(): void
        {
        }
    }
}
namespace {
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedConstantFound -- Standard WP plugin version constant.
    \define('TIV_GLOBUS_VERSION', '1.3.0');
}