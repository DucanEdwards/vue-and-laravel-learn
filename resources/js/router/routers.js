import groups from "./groups";

const components = require.context("@/views", true, /\.vue$/);
components.keys().forEach(path => {
    const component = components(path).default;
    if (component.route !== false) {
        path = path
            .slice(2, -4)
            .replace(/(?<!\/)([A-Z])/, (...args) => {
                return "-" + args[1].toLowerCase();
            })
            .toLowerCase();
        //组名称
        const groupName = path.match(/(.+?)\//)[1];
        // 子路由
        let url = path.slice(groupName.length).slice(1);
        // 路由名
        const name = path.replace(/\//g, ".");
        // 添加到路由组
        const route = { path: url, component, name };
        groups[groupName].children.push(
            Object.assign(route, component.route || {})
        );
    }
    // console.log(url)
});

// console.log(Object.values(groups))
export default Object.values(groups);
