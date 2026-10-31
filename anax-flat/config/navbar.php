<?php
/**
 * Config-file for navigation bar.
 *
 */

// Array to use in mutliple navbars
$navbarItems = [
    "report" => [
        "text"  => t("Redovisningar"),
        "url"   => $this->di->get("url")->create("report"),
        "title" => t("Redovisningstext"),
        "mark-if-parent" => true,

        "submenu" => [
            "items" => [
                "Kmom01" => [
                    "text"  => t("Kmom01"),
                    "url"   => $this->di->get("url")->create("report/kmom01"),
                    "title" => t("Kmom01")
                ],
                "Kmom02" => [
                    "text"  => t("Kmom02"),
                    "url"   => $this->di->get("url")->create("report/kmom02"),
                    "title" => t("Kmom02")
                ],
                "Kmom03" => [
                    "text"  => t("Kmom03"),
                    "url"   => $this->di->get("url")->create("report/kmom03"),
                    "title" => t("Kmom03")
                ],
                "Kmom04" => [
                    "text"  => t("Kmom04"),
                    "url"   => $this->di->get("url")->create("report/kmom04"),
                    "title" => t("Kmom04")
                ],
                "Kmom05" => [
                    "text"  => t("Kmom05"),
                    "url"   => $this->di->get("url")->create("report/kmom05"),
                    "title" => t("Kmom05")
                ],
                "Kmom06" => [
                    "text"  => t("Kmom06"),
                    "url"   => $this->di->get("url")->create("report/kmom06"),
                    "title" => t("Kmom06")
                ],
                "Kmom10" => [
                    "text"  => t("Kmom10"),
                    "url"   => $this->di->get("url")->create("report/kmom10"),
                    "title" => t("Kmom10")
                ],
            ],
        ],
    ],

    "analysis" => [
        "text"  => t("Analysering"),
        "url"   => $this->di->get("url")->create("analysis"),
        "title" => t("Analysering"),
        "mark-if-parent" => true,

        "submenu" => [
            "items" => [
                "Färger" => [
                    "text"  => t("Färger"),
                    "url"   => $this->di->get("url")->create("analysis/colorscheme"),
                    "title" => t("Färger")
                ],

                "Laddningstid-och-användarvänlighet" => [
                    "text"  => t("Laddningstid och användarvänlighet"),
                    "url"   => $this->di->get("url")->create("analysis/speed-and-usability"),
                    "title" => t("Laddningstid och användarvänlighet")
                ],

                "Design-principer" => [
                    "text"  => t("Design principer"),
                    "url"   => $this->di->get("url")->create("analysis/design-principles"),
                    "title" => t("Design principer")
                ],

                "Användarvänlighet" => [
                    "text"  => t("Användarvänlighet"),
                    "url"   => $this->di->get("url")->create("analysis/usability"),
                    "title" => t("Användarvänlighet")
                ],

                "Skrivsätt" => [
                    "text"  => t("Skrivsätt"),
                    "url"   => $this->di->get("url")->create("analysis/write"),
                    "title" => t("Skrivsätt")
                ],
            ],
        ],
    ],

    "blogg" => [
        "text"  => t("Blogg"),
        "url"   => $this->di->get("url")->create("blogg"),
        "title" => t("Blogg")
    ],

    "about" => [
        "text"  => t("Om"),
        "url"   => $this->di->get("url")->create("about"),
        "title" => t("Om denna sidan")
    ],

    "theme-selector" => [
        "text"  => t("Temaväljare"),
        "url"   => $this->di->get("url")->create("theme-selector"),
        "title" => t("Temaväljare")
    ],

    "tasks" => [
        "text"  => t("Uppgifter"),
        "url"   => $this->di->get("url")->create("#"),
        "title" => t("Uppgifter"),

        "submenu" => [
            "items" => [
                "Tema" => [
                    "text"  => t("Tema"),
                    "url"   => $this->di->get("url")->create("theme"),
                    "title" => t("Tema")
                ],

                "grid" => [
                    "text"  => t("Grid"),
                    "url"   => $this->di->get("url")->create("grid"),
                    "title" => t("Grid")
                ],

                "typography" => [
                    "text"  => t("Typografi"),
                    "url"   => $this->di->get("url")->create("typography"),
                    "title" => t("Typografi")
                ],

                "Bilder" => [
                    "text"  => t("Bilder"),
                    "url"   => $this->di->get("url")->create("images"),
                    "title" => t("Bilder")
                ],

                "Design-element" => [
                    "text"  => t("Design element"),
                    "url"   => $this->di->get("url")->create("design-element"),
                    "title" => t("Design element")
                ],

                "Design-principles" => [
                    "text"  => t("Design principer"),
                    "url"   => $this->di->get("url")->create("design-principles"),
                    "title" => t("Design principer")
                ],
            ],
        ],
    ],
];

return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => $navbarItems,
    ],

    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => $navbarItems,
    ],


    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
