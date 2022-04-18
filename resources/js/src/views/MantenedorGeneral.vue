<template>
    <div>
        <b-row>
            <b-col>
                <b-card title="Agregar Año">
                    <div class="w-100">
                        <label for="InputHelp">Año</label>
                        <small class="text-muted"> Ej. <i>2022</i></small>
                        <b-form-input v-model="anio"></b-form-input>
                        <br />
                        <b-button
                            md="12"
                            v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                            variant="primary"
                            @click="AgregarAnio()"
                        >
                            Agregar Año
                        </b-button>
                    </div>
                </b-card>
            </b-col>
            <b-col>
                <b-card title="Modificar Año">
                    <div class="w-100">
                        <label for="InputHelp">Seleccione Año</label>
                        <v-select
                            v-model="selectAnio"
                            :options="listadoAnio"
                            label="anio"
                            @input="setAnio"
                        ></v-select
                        ><br />
                        <label for="InputHelp">Año</label>
                        <small class="text-muted"> Ej. <i>2022</i></small>
                        <b-form-input v-model="Modanio"></b-form-input>
                        <br />
                        <b-button
                            md="12"
                            v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                            variant="primary"
                            @click="ModificarAnio()"
                        >
                            Modificar Año
                        </b-button>
                    </div>
                </b-card>
            </b-col>
        </b-row>
        <br /><br />
        <b-row>
            <b-col>
                <b-card title="Agregar Item Presupuestario">
                    <div class="w-100">
                        <label for="InputHelp"
                            >Codigo Item Presupuestario</label
                        >
                        <small class="text-muted">
                            Ej. <i>22.12.999.002.02</i></small
                        >
                        <b-form-input
                            v-model="codItemPresupuestario"
                        ></b-form-input>
                        <br />
                        <label for="InputHelp"
                            >Titulo Item Presupuestario</label
                        >
                        <small class="text-muted">
                            Ej. <i>Compra de Procedimientos</i></small
                        >
                        <b-form-input
                            v-model="tituloItemPresupuestario"
                        ></b-form-input>
                        <br />
                        <label for="InputHelp"
                            >Descripcion Item Presupuestario</label
                        >
                        <small class="text-muted">
                            Ej.
                            <i>Compra de Procedimientos</i></small
                        >
                        <b-form-input
                            v-model="descripcionItemPresupuestario"
                        ></b-form-input>
                        <br />
                        <b-button
                            md="12"
                            v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                            variant="primary"
                            @click="AgregarItemPresupuestario()"
                        >
                            Agregar Item Presupuestario
                        </b-button>
                    </div>
                </b-card>
            </b-col>
            <b-col>
                <b-card title="Modificar Item Presupuestario">
                    <div class="w-100">
                        <label for="InputHelp"
                            >Seleccione Codigo Item Presupuestario</label
                        >
                        <v-select
                            v-model="selectCodPresupuestario"
                            :options="listadoItemPresupuestario"
                            label="codItemPresupuestario"
                            @input="setItemPresupuestario"
                        ></v-select
                        ><br /><br />
                        <label for="InputHelp"
                            >Codigo Item Presupuestario</label
                        >
                        <small class="text-muted">
                            Ej. <i>22.12.999.002.02</i></small
                        >
                        <b-form-input
                            v-model="ModcodItemPresupuestario"
                        ></b-form-input>
                        <br />
                        <label for="InputHelp"
                            >Titulo Item Presupuestario</label
                        >
                        <small class="text-muted">
                            Ej. <i>Compra de Procedimientos</i></small
                        >
                        <b-form-input
                            v-model="ModtituloItemPresupuestario"
                        ></b-form-input>
                        <br />
                        <label for="InputHelp"
                            >Descripcion Item Presupuestario</label
                        >
                        <small class="text-muted">
                            Ej. <i>Compra de Procedimientos</i></small
                        >
                        <b-form-input
                            v-model="ModdescripcionItemPresupuestario"
                        ></b-form-input>
                        <br />
                        <b-button
                            md="12"
                            v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                            variant="primary"
                            @click="ModificarItemPresupuestario()"
                        >
                            Modificar Item Presupuestario
                        </b-button>
                    </div>
                </b-card>
            </b-col>
        </b-row>
        <br /><br /><b-row>
            <b-col>
                <b-card title="Agregar Licitacion">
                    <div class="w-100">
                        <label for="InputHelp">Codigo Licitacion</label>
                        <small class="text-muted">
                            Ej. <i>1641-14-LQ22 </i></small
                        >
                        <b-form-input v-model="codLicitacion"></b-form-input>
                        <br />
                        <label for="InputHelp">Descripcion Licitacion</label>
                        <small class="text-muted">
                            Ej.
                            <i
                                >"Mantenimiento preventivo y correctivo equipo
                                RX Portátil DRX-Revolution KN° 58071385"
                            </i></small
                        >
                        <b-form-input v-model="desLicitacion"></b-form-input>
                        <br />
                        <b-button
                            md="12"
                            v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                            variant="primary"
                            @click="AgregarLicitacion()"
                        >
                            Agregar Licitacion
                        </b-button>
                    </div>
                </b-card>
            </b-col>
            <b-col>
                <b-card title="Modificar Licitacion">
                    <div class="w-100">
                        <label for="InputHelp"
                            >Seleccione Codigo Licitacion</label
                        >
                        <v-select
                            v-model="selectLicitacion"
                            :options="listadoLicitacion"
                            label="codLicitacion"
                            @input="setLicitacion"
                        ></v-select
                        ><br />

                        <label for="InputHelp">Codigo Licitacion</label>
                        <small class="text-muted">
                            Ej. <i>1641-14-LQ22 </i></small
                        >
                        <b-form-input v-model="ModcodLicitacion"></b-form-input>
                        <br />
                        <label for="InputHelp">Descripcion Licitacion</label>
                        <small class="text-muted">
                            Ej.
                            <i
                                >"Mantenimiento preventivo y correctivo equipo
                                RX Portátil DRX-Revolution KN° 58071385"
                            </i></small
                        >
                        <b-form-input v-model="ModdesLicitacion"></b-form-input>
                        <br />
                        <b-button
                            md="12"
                            v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                            variant="primary"
                            @click="ModificarLicitacion()"
                        >
                            Modificar Licitacion
                        </b-button>
                    </div>
                </b-card>
            </b-col>
        </b-row>
        <br /><br /><b-row>
            <b-col>
                <b-card title="Agregar Proveedor">
                    <div class="w-100">
                        <label for="InputHelp">Rut Proveedor</label>
                        <small class="text-muted">
                            Ej. <i>86.537.600-6 </i></small
                        >
                        <b-form-input v-model="runProveedor"></b-form-input>
                        <br />
                        <label for="InputHelp">Descripcion Proveedor</label>
                        <small class="text-muted">
                            Ej.
                            <i>"Alcon " </i></small
                        >
                        <b-form-input v-model="desProveedor"></b-form-input>
                        <br />
                        <b-button
                            md="12"
                            v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                            variant="primary"
                            @click="AgregarProveedor()"
                        >
                            Agregar Proveedor
                        </b-button>
                    </div>
                </b-card>
            </b-col>
            <b-col>
                <b-card title="Modificar Proveedor">
                    <div class="w-100">
                        <label for="InputHelp">Seleccione Proveedor</label>
                        <v-select
                            v-model="selectProveedor"
                            :options="listadoProveedor"
                            label="runProveedor"
                            @input="setProveedor"
                        ></v-select
                        ><br />

                        <label for="InputHelp">Rut Proveedor</label>
                        <small class="text-muted">
                            Ej. <i>86.537.600-6 </i></small
                        >
                        <b-form-input v-model="ModrunProveedor"></b-form-input>
                        <br />
                        <label for="InputHelp">Descripcion Proveedor</label>
                        <small class="text-muted">
                            Ej.
                            <i>"Alcon" </i></small
                        >
                        <b-form-input v-model="ModdesProveedor"></b-form-input>

                        <br />
                        <b-button
                            md="12"
                            v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                            variant="primary"
                            @click="ModificarProveedor()"
                        >
                            Modificar Proveedor
                        </b-button>
                    </div>
                </b-card>
            </b-col>
        </b-row>
    </div>
</template>
<script>
import {
    BRow,
    BCol,
    BFormGroup,
    BFormInput,
    BFormSelect,
    BFormCheckbox,
    BForm,
    BToast,
    BButton,
    BContainer,
    VBModal,
    BModal,
    BCard,
    BCardText,
    VBTooltip,
    BFormRating,
} from "bootstrap-vue";
import Vue from "vue";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
import axios from "axios";
import {
    AlertCircleIcon,
    AlignJustifyIcon,
    CheckSquareIcon,
} from "vue-feather-icons";
import VueGoodTablePlugin from "vue-good-table";
import "vue-good-table/dist/vue-good-table.css";
Vue.use(VueGoodTablePlugin);

import Ripple from "vue-ripple-directive";
export default {
    components: {
        BCard,
        BCardText,
        BFormRating,
        BRow,
        BCol,
        BFormGroup,
        BFormInput,
        BFormSelect,
        BFormCheckbox,
        BForm,
        BButton,
        BContainer,
        BModal,
        BToast,
        vSelect,
        VBModal,
        AlertCircleIcon,
        CheckSquareIcon,
        AlignJustifyIcon,
    },
    directives: {
        "b-tooltip": VBTooltip,
        Ripple,
        "b-modal": VBModal,
    },
    data: () => ({
        //Vmodels
        //Agregar
        anio: 0,
        codItemPresupuestario: 0,
        tituloItemPresupuestario: "N/A",
        descripcionItemPresupuestario: "N/A",
        codLicitacion: "N/A",
        desLicitacion: "N/A",
        runProveedor: "N/A",
        desProveedor: "N/A",
        //Modificar
        Modanio: 0,
        ModcodItemPresupuestario: 0,
        ModtituloItemPresupuestario: "N/A",
        ModdescripcionItemPresupuestario: "N/A",
        ModcodLicitacion: "N/A",
        ModdesLicitacion: "N/A",
        ModrunProveedor: "N/A",
        ModdesProveedor: "N/A",
        //Select Model
        selectAnio: { id: 0, anio: "Seleccione Año" },
        selectCodPresupuestario: {
            id: 0,
            codItemPresupuestario: 0,
            tituloItemPresupuestario: "N/A",
            descripcionItemPresupuestario: "N/A",
        },
        selectLicitacion: { id: 0, codLicitacion: "N/A", desLicitacion: "N/A" },
        selectProveedor: { id: 0, runProveedor: "N/A", desProveedor: "N/A" },
        //Options - Listado Models
        listadoAnio: [],
        listadoItemPresupuestario: [],
        listadoLicitacion: [],
        listadoProveedor: [],
        //Variable de Entorno
        localVal: process.env.MIX_APP_URL,
    }),
    methods: {
        ListadoAnio() {
            try {
                axios.get(this.localVal + "/api/GetAnio").then((res) => {
                    this.listadoAnio = res.data;
                });
            } catch (error) {
                console.log(error);
            }
        },
        AgregarAnio() {
            try {
                let data = { anio: this.anio };
                axios
                    .post(this.localVal + "/api/PostAnio", data)
                    .then((res) => {
                        let data = res.data;
                        if (!data) {
                            this.$bvToast.toast(
                                "No fue posible ingresar el año, revise los datos y intentelo nuevamente",
                                {
                                    title: "Error",
                                    variant: "danger",
                                    solid: true,
                                }
                            );
                        } else {
                            this.$bvToast.toast("Año ingresado sin problemas", {
                                title: "Correcto",
                                variant: "success",
                                solid: true,
                            });
                            this.anio = 0;
                        }
                    })
                    .catch((error) => console.log(error));
            } catch (error) {
                console.log(error);
            }
        },
        setAnio() {
            try {
                this.Modanio = this.selectAnio.anio;
            } catch (error) {
                console.log(error);
            }
        },
        ModificarAnio() {
            try {
                let data = { id: this.selectAnio.id, anio: this.Modanio };
                axios
                    .post(this.localVal + "/api/PutAnio", data)
                    .then((res) => {
                        let data = res.data;
                        if (!data) {
                            this.$bvToast.toast(
                                "No fue posible Modificar el año, revise los datos y intentelo nuevamente",
                                {
                                    title: "Error",
                                    variant: "danger",
                                    solid: true,
                                }
                            );
                        } else {
                            this.$bvToast.toast(
                                "Año Modificado sin problemas",
                                {
                                    title: "Correcto",
                                    variant: "success",
                                    solid: true,
                                }
                            );
                            this.Modanio = 0;
                            this.ListadoAnio();
                        }
                    })
                    .catch((error) => console.log(error));
            } catch (error) {
                console.log(error);
            }
        },
        ListadoItemsPresupuestarios() {
            try {
                axios
                    .get(this.localVal + "/api/GetItemPresupuestario")
                    .then((res) => {
                        this.listadoItemPresupuestario = res.data;
                    });
            } catch (error) {
                console.log(error);
            }
        },
        AgregarItemPresupuestario() {
            try {
                let data = {
                    codItemPresupuestario: this.codItemPresupuestario,
                    tituloItemPresupuestario: this.tituloItemPresupuestario,
                    descripcionItemPresupuestario:
                        this.descripcionItemPresupuestario,
                };
                axios
                    .post(this.localVal + "/api/PostItemPresupuestario", data)
                    .then((res) => {
                        let data = res.data;
                        if (!data) {
                            this.$bvToast.toast(
                                "No fue posible ingresar el Item Presupuestario, revise los datos y intentelo nuevamente",
                                {
                                    title: "Error",
                                    variant: "danger",
                                    solid: true,
                                }
                            );
                        } else {
                            this.$bvToast.toast(
                                "Item Presupuestario ingresado sin problemas",
                                {
                                    title: "Correcto",
                                    variant: "success",
                                    solid: true,
                                }
                            );
                            this.codItemPresupuestario = "";
                            this.tituloItemPresupuestario = "";
                            this.descripcionItemPresupuestario = "";
                        }
                    })
                    .catch((error) => console.log(error));
            } catch (error) {
                console.log(error);
            }
        },
        setItemPresupuestario() {
            try {
                this.ModcodItemPresupuestario =
                    this.selectCodPresupuestario.codItemPresupuestario;
                this.ModtituloItemPresupuestario =
                    this.selectCodPresupuestario.tituloItemPresupuestario;
                this.ModdescripcionItemPresupuestario =
                    this.selectCodPresupuestario.descripcionItemPresupuestario;
            } catch (error) {
                console.log(error);
            }
        },
        ModificarItemPresupuestario() {
            try {
                let data = {
                    id: this.selectCodPresupuestario.id,
                    codItemPresupuestario: this.ModcodItemPresupuestario,
                    tituloItemPresupuestario: this.ModtituloItemPresupuestario,
                    descripcionItemPresupuestario:
                        this.ModdescripcionItemPresupuestario,
                };
                axios
                    .post(this.localVal + "/api/PutItemPresupuestario", data)
                    .then((res) => {
                        let data = res.data;
                        if (!data) {
                            this.$bvToast.toast(
                                "No fue posible Modificar el Item Presupuestario, revise los datos y intentelo nuevamente",
                                {
                                    title: "Error",
                                    variant: "danger",
                                    solid: true,
                                }
                            );
                        } else {
                            this.$bvToast.toast(
                                "Item Presupuestario Modificar sin problemas",
                                {
                                    title: "Correcto",
                                    variant: "success",
                                    solid: true,
                                }
                            );
                            this.ModcodItemPresupuestario = "";
                            this.ModtituloItemPresupuestario = "";
                            this.ModdescripcionItemPresupuestario = "";
                            this.ListadoItemsPresupuestarios();
                        }
                    })
                    .catch((error) => console.log(error));
            } catch (error) {
                console.log(error);
            }
        },
        ListadosLicitaciones() {
            try {
                axios.get(this.localVal + "/api/GetLicitacion").then((res) => {
                    this.listadoLicitacion = res.data;
                });
            } catch (error) {
                console.log(error);
            }
        },
        AgregarLicitacion() {
            try {
                let data = {
                    codLicitacion: this.codLicitacion,
                    desLicitacion: this.desLicitacion,
                };
                axios
                    .post(this.localVal + "/api/PostLicitacion", data)
                    .then((res) => {
                        let data = res.data;
                        if (!data) {
                            this.$bvToast.toast(
                                "No fue posible ingresar la Licitacion, revise los datos y intentelo nuevamente",
                                {
                                    title: "Error",
                                    variant: "danger",
                                    solid: true,
                                }
                            );
                        } else {
                            this.$bvToast.toast(
                                "Licitacion ingresada sin problemas",
                                {
                                    title: "Correcto",
                                    variant: "success",
                                    solid: true,
                                }
                            );
                            this.desLicitacion = "";
                            this.codLicitacion = "";
                            this.ListadosLicitaciones();
                        }
                    })
                    .catch((error) => console.log(error));
            } catch (error) {
                console.log(error);
            }
        },
        setLicitacion() {
            try {
                this.ModcodLicitacion = this.selectLicitacion.codLicitacion;
                this.ModdesLicitacion = this.selectLicitacion.desLicitacion;
            } catch (error) {
                console.log(error);
            }
        },
        ModificarLicitacion() {
            try {
                let data = {
                    id: this.selectLicitacion.id,
                    codLicitacion: this.ModcodLicitacion,
                    desLicitacion: this.ModdesLicitacion,
                };
                axios
                    .post(this.localVal + "/api/PutLicitacion", data)
                    .then((res) => {
                        let data = res.data;
                        if (!data) {
                            this.$bvToast.toast(
                                "No fue posible Modificar la Licitacion, revise los datos y intentelo nuevamente",
                                {
                                    title: "Error",
                                    variant: "danger",
                                    solid: true,
                                }
                            );
                        } else {
                            this.$bvToast.toast(
                                "Licitacion Modificada sin problemas",
                                {
                                    title: "Correcto",
                                    variant: "success",
                                    solid: true,
                                }
                            );
                            this.ModdesLicitacion = "";
                            this.ModcodLicitacion = "";
                            this.ListadosLicitaciones();
                        }
                    })
                    .catch((error) => console.log(error));
            } catch (error) {
                console.log(error);
            }
        },
        ListadosProveedores() {
            try {
                axios.get(this.localVal + "/api/GetProveedor").then((res) => {
                    this.listadoProveedor = res.data;
                });
            } catch (error) {
                console.log(error);
            }
        },
        AgregarProveedor() {
            try {
                let data = {
                    runProveedor: this.runProveedor,
                    desProveedor: this.desProveedor,
                };
                axios
                    .post(this.localVal + "/api/PostProveedor", data)
                    .then((res) => {
                        let data = res.data;
                        if (!data) {
                            this.$bvToast.toast(
                                "No fue posible ingresar al Proveedor, revise los datos y intentelo nuevamente",
                                {
                                    title: "Error",
                                    variant: "danger",
                                    solid: true,
                                }
                            );
                        } else {
                            this.$bvToast.toast(
                                "Proveedor Ingresado sin problemas",
                                {
                                    title: "Correcto",
                                    variant: "success",
                                    solid: true,
                                }
                            );
                            this.runProveedor = "";
                            this.desProveedor = "";
                            this.ListadosProveedores();
                        }
                    })
                    .catch((error) => console.log(error));
            } catch (error) {
                console.log(error);
            }
        },
        setProveedor() {
            try {
                this.ModrunProveedor = this.selectProveedor.runProveedor;
                this.ModdesProveedor = this.selectProveedor.desProveedor;
            } catch (error) {
                console.log(error);
            }
        },
        ModificarProveedor() {
            try {
                let data = {
                    id: this.selectProveedor.id,
                    runProveedor: this.ModrunProveedor,
                    desProveedor: this.ModdesProveedor,
                };
                axios
                    .post(this.localVal + "/api/PutProveedor", data)
                    .then((res) => {
                        let data = res.data;
                        if (!data) {
                            this.$bvToast.toast(
                                "No fue posible Modificar al Proveedor, revise los datos y intentelo nuevamente",
                                {
                                    title: "Error",
                                    variant: "danger",
                                    solid: true,
                                }
                            );
                        } else {
                            this.$bvToast.toast(
                                "Proveedor Modificar sin problemas",
                                {
                                    title: "Correcto",
                                    variant: "success",
                                    solid: true,
                                }
                            );
                            this.ModrunProveedor = "";
                            this.ModdesProveedor = "";
                            this.ListadosProveedores();
                        }
                    })
                    .catch((error) => console.log(error));
            } catch (error) {
                console.log(error);
            }
        },
    },
    created() {
        this.ListadoAnio();
        this.ListadoItemsPresupuestarios();
        this.ListadosLicitaciones();
        this.ListadosProveedores();
    },
};
</script>
