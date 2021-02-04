import groups from "./groups";

const components = require.context("@/views", true, /\.vue$/);
components.keys().forEach(path => {
    const component = components(path).default;
    if (component.route !== false) {
        let url = path.slice(2, -4);
        //组名称
        const groupName = url.match(/(.+?)\//)[1];
        // 子路由
        url = url.slice(groupName.length);
        url = url
            .replace(/(?<!\/)([A-Z])/, (...args) => {
                return "-" + args[1].toLowerCase();
            })
            .toLowerCase()
            .slice(1);
        const route = { path: url, component };
        groups[groupName].children.push(
            Object.assign(route, component.route || {})
        );
    }
    // console.log(url)
});

// console.log(Object.values(groups))
export default Object.values(groups);
