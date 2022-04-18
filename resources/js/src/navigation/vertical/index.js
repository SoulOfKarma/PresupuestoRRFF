export default [
    {
        title: "Home",
        route: "home",
        icon: "HomeIcon",
    },
    {
        title: "Tabla Presupuestos",
        route: "TablaPresupuestos",
        icon: "FileIcon",
    },
    {
        title: "Administracion",
        route: null,
        icon: "FileIcon",
        children: [
            {
                title: "Mantenedor General",
                route: "MantenedorGeneral",
                icon: "FileIcon",
            },
        ],
    },
];
