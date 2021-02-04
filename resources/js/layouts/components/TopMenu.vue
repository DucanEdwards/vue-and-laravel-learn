<template>
  <header class="navbar navbar-expand-md navbar-dark d-print-none">
    <div class="container-xl max-w-full">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-menu"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav flex-row order-md-last">
        <!-- <div class="nav-item dropdown d-none d-md-flex me-3">
          <a
            href="#"
            class="nav-link px-0"
            data-bs-toggle="dropdown"
            tabindex="-1"
            aria-label="Show notifications"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"
              ></path>
              <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
            </svg>
            <span class="badge bg-red"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
            <div class="card">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus ad amet consectetur exercitationem fugiat in ipsa
                ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis
                et magni maxime necessitatibus ullam.
              </div>
            </div>
          </div>
        </div> -->
        <div class="nav-item dropdown">
          <a
            href="#"
            class="nav-link d-flex lh-1 text-reset p-0"
            data-bs-toggle="dropdown"
            aria-label="Open user menu"
          >
            <span
              class="avatar avatar-sm"
              :style="`background-image: url(${$store.state.user.icon})`"
            ></span>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="#" class="dropdown-item">会员中心</a>
            <div class="dropdown-divider"></div>
            <a href="#" @click.prevent="logout" class="dropdown-item">退出登录</a>
          </div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div
          class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center"
        >
          <ul class="navbar-nav">
            <li class="nav-item" v-for="(menu,index) in menus" :key="index">
              <router-link class="nav-link" :to="menu.to">
                <span class="nav-link-title"> 
                    <i class="mr-1" :class="menu.icon"></i>{{menu.title}} 
                </span>
              </router-link>
            </li>
          </ul>
          <!-- <div
            class="ms-md-auto ps-md-4 py-2 py-md-0 me-md-4 order-first order-md-last flex-grow-1 flex-md-grow-0"
          >
            <form action="." method="get">
              <div class="input-icon">
                <span class="input-icon-addon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="10" cy="10" r="7"></circle>
                    <line x1="21" y1="21" x2="15" y2="15"></line>
                  </svg>
                </span>
                <input
                  type="text"
                  class="form-control form-control-dark"
                  placeholder="Search…"
                  aria-label="Search in website"
                />
              </div>
            </form>
          </div> -->
        </div>
      </div>
    </div>
  </header>
</template>

<script>
const menus=[
    {title:"站点列表",to:"/admin",icon:"fas fa-baseball-ball"},
    {title:"模块管理",to:"",icon:"fas fa-broom"},
    {title:"会员组",to:"",icon:"fas fa-burn"},
    {title:"系统设置",to:"",icon:"fas fa-cannabis"},
]
export default {
    data() {
        return {
            menus
        }
    },
    methods:{
      logout() {
        window.localStorage.removeItem("token")
        // this.$router.push("/login")
        location.href='/'
      }
    }
};
</script>

<style>
</style>