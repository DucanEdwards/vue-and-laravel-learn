const components = require.context("@/layouts", false, /\.vue$/);

const groups = {};
components.keys().forEach(path => {
    const name = path.slice(2, -10).toLowerCase();
    if (/layout/.test(path)) {
        const component = components(path).default;
        groups[name] = {
            path: `/${name}`,
            component,
            children: [],
            ...component.route
        };
    }
});
// const groups = {
//     site: { path: "/site", component: Sitelayout, children: [] },
//     system: { path: "/system", component: Systemlayout, children: [] },
//     auth: { path: "/auth", component: Authlayout, children: [] },
//     member: { path: "/member", component: Memberlayout, children: [] }
// };

export default groups;
