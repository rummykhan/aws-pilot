<template>
    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <div class="navbar-brand-wrapper justify-content-between">
                    <!-- Logo -->


                    <router-link class="navbar-brand " :to="`${URL.URL_HOME.url}`" title="Home">
                        <img class="navbar-brand-logo" src="/assets/svg/logos/logo.svg" alt="Logo">
                        <img class="navbar-brand-logo-mini" src="/assets/svg/logos/logo-short.svg"
                             alt="Logo">
                    </router-link>


                    <!-- End Logo -->

                    <!-- Navbar Vertical Toggle -->
                    <button type="button"
                            class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->
                </div>

                <!-- Content -->
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav navbar-nav-lg nav-tabs">
                        <!-- Dashboards -->
                        <li class="nav-item ">
                            <router-link class="js-nav-tooltip-link nav-link" :to="`${URL.URL_HOME.url}`" title="Dashboard"
                                         data-placement="left">
                                <i class="tio-home-vs-1-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboard</span>
                            </router-link>
                        </li>
                        <!-- End Dashboards -->

                        <li class="nav-item">
                            <small class="nav-subtitle" title="Pages">Pages</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <!-- Environment -->
                        <li class="navbar-vertical-aside-has-menu">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;"
                               title="Apps">
                                <i class="tio-menu-vs nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Environment <span
                                    class="badge badge-info badge-pill ml-1">Hot</span>
                                </span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                <li class="nav-item">
                                    <router-link class="nav-link " :to="`${URL.URL_ENV.url}`" title="Environment">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">List</span>
                                    </router-link>
                                </li>
                            </ul>
                        </li>
                        <!-- End Environment -->

                        <!-- Projects -->
                        <li class="navbar-vertical-aside-has-menu">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;"
                               title="Apps">
                                <i class="tio-apps nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Projects <span
                                    class="badge badge-info badge-pill ml-1">Hot</span></span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                <li class="nav-item">
                                    <router-link class="nav-link " :to="`${URL.URL_PROJECTS_LIST.url}`" title="Projects">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">List</span>
                                    </router-link>
                                </li>
                            </ul>
                        </li>
                        <!-- End Projects -->

                        <!-- Servers -->
                        <li class="navbar-vertical-aside-has-menu">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;"
                               title="Apps">
                                <i class="tio-laptop nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Servers <span
                                    class="badge badge-info badge-pill ml-1">Hot</span></span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                <li class="nav-item">
                                    <a class="nav-link " href="./apps-kanban.html" title="Kanban">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">List</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="./apps-invoice-generator.html" title="Invoice generator">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Create</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Servers -->

                        <!-- Workspaces -->
                        <li class="navbar-vertical-aside-has-menu">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;"
                               title="Apps">
                                <i class="tio-launch nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Workspaces <span
                                    class="badge badge-info badge-pill ml-1">Hot</span></span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                <li class="nav-item">
                                    <a class="nav-link " href="./apps-kanban.html" title="Kanban">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Local</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="./apps-invoice-generator.html" title="Invoice generator">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Remote</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="./apps-file-manager.html" title="File manager">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Workspaces -->

                        <!-- Git -->
                        <li class="navbar-vertical-aside-has-menu">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;"
                               title="Apps">
                                <i class="tio-github nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Git <span
                                    class="badge badge-info badge-pill ml-1">Hot</span></span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                <li class="nav-item">
                                    <a class="nav-link " href="./apps-kanban.html" title="Kanban">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Local</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="./apps-invoice-generator.html" title="Invoice generator">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Remote</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Git -->


                    </ul>
                </div>
                <!-- End Content -->


            </div>
        </div>
    </aside>
</template>
<script>

import * as URL from "../network/urls/urls";

export default {
    name: 'Sidebar',
    data() {
        return {
            URL
        }
    }
}
</script>
