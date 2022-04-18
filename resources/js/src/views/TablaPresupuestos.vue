<template>
    <div>
        <b-row>
            <b-col>
                <b-card title="Agregar Presupuesto">
                    <div class="w-100">
                        <b-button
                            md="12"
                            v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                            variant="primary"
                            block
                            v-b-modal.modal-primary
                        >
                            Agregar Presupuesto
                        </b-button>
                    </div>
                </b-card>
            </b-col>
            <b-col>
                <b-card title="Seleccionar Año ">
                    <div class="w-100">
                        <v-select
                            v-model="selectAnio"
                            :options="listadoAnio"
                            label="anio"
                            @input="CargarPorAnio"
                        ></v-select
                        ><br />
                    </div>
                </b-card>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <b-card title="Listado Presupuestos">
                    <vue-good-table :columns="columns" :rows="rows">
                        <template slot="table-row" slot-scope="props">
                            <span v-if="props.column.field === 'action'">
                            </span>
                            <span v-else>
                                {{ props.formattedRow[props.column.field] }}
                            </span>
                        </template>
                    </vue-good-table>
                </b-card>
            </b-col>
        </b-row>
        <b-row>
            <b-modal
                id="modal-primary"
                modal-class="modal-primary"
                centered
                title="Nuevo Presupuesto"
                size="xl"
                hide-footer
            >
                <b-form-group>
                    <b-row>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp">Seleccione Año</label>
                                <small class="text-muted">
                                    Ej. <i>2022</i></small
                                >
                                <v-select
                                    v-model="selectAnioAg"
                                    :options="listadoAnioAg"
                                    label="anio"
                                ></v-select
                                ><br />
                            </div>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp"
                                    >Seleccione Codigo Item
                                    Presupuestario</label
                                >
                                <v-select
                                    v-model="selectCodPresupuestario1"
                                    :options="listadoItemPresupuestario1"
                                    label="codItemPresupuestario"
                                    @input="setItemPresupuestario1"
                                ></v-select>
                            </div>
                        </b-col>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp"
                                    >Item Presupuestario</label
                                >
                                <b-form-input
                                    id="InputHelp"
                                    v-model="tituloItemPresupuestario1"
                                    disabled
                                />
                            </div>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp"
                                    >Seleccione Codigo Item
                                    Presupuestario</label
                                >
                                <v-select
                                    v-model="selectCodPresupuestario2"
                                    :options="listadoItemPresupuestario2"
                                    label="codItemPresupuestario"
                                    @input="setItemPresupuestario2"
                                ></v-select>
                            </div>
                        </b-col>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp"
                                    >Item Presupuestario</label
                                >
                                <b-form-input
                                    id="InputHelp"
                                    v-model="tituloItemPresupuestario2"
                                    disabled
                                />
                            </div>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp"
                                    >Seleccione Codigo Item
                                    Presupuestario</label
                                >
                                <v-select
                                    v-model="selectCodPresupuestario3"
                                    :options="listadoItemPresupuestario3"
                                    label="codItemPresupuestario"
                                    @input="setItemPresupuestario3"
                                ></v-select>
                            </div>
                        </b-col>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp"
                                    >Item Presupuestario</label
                                >
                                <b-form-input
                                    id="InputHelp"
                                    v-model="tituloItemPresupuestario3"
                                    disabled
                                />
                            </div>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp"
                                    >Seleccione Codigo Licitacion</label
                                >
                                <v-select
                                    v-model="selectLicitacion"
                                    :options="listadoLicitacion"
                                    label="codLicitacion"
                                    @input="setLicitacion"
                                ></v-select>
                            </div>
                        </b-col>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp">Licitacion</label>
                                <b-form-input
                                    id="InputHelp"
                                    v-model="desLicitacion"
                                    disabled
                                />
                            </div>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp"
                                    >Seleccione Proveedor</label
                                >
                                <v-select
                                    v-model="selectProveedor"
                                    :options="listadoProveedor"
                                    label="runProveedor"
                                    @input="setProveedor"
                                ></v-select>
                            </div>
                        </b-col>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp">Proveedor</label>
                                <b-form-input
                                    id="InputHelp"
                                    v-model="desProveedor"
                                    disabled
                                />
                            </div>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp"
                                    >Seleccione Tipo Servicio</label
                                >
                                <v-select
                                    v-model="selectTipoServicio"
                                    :options="listadoTipoServicio"
                                    label="desTipoServicios"
                                ></v-select>
                            </div>
                        </b-col>
                        <b-col>
                            <div class="w-100">
                                <label for="InputHelp">Seleccione Unidad</label>
                                <v-select
                                    v-model="selectUnidad"
                                    :options="listadoUnidad"
                                    label="desUnidad"
                                ></v-select>
                            </div>
                        </b-col>
                    </b-row>

                    <b-row>
                        <b-col>
                            <b-button
                                class="mt-3"
                                block
                                variant="primary"
                                @click="$bvModal.hide('modal-primary')"
                                >Cerrar</b-button
                            >
                        </b-col>
                        <b-col>
                            <b-button
                                class="mt-3"
                                variant="success"
                                block
                                @click="handleSubmit()"
                                >Guardar</b-button
                            >
                        </b-col>
                    </b-row>
                </b-form-group>
            </b-modal>
        </b-row>
    </div>
</template>
<script>
import {
    BRow,
    BCol,
    BFormGroup,
    BFormInput,
    BFormCheckbox,
    BForm,
    BButton,
    BContainer,
    VBModal,
    BModal,
    BCard,
    BCardText,
    VBTooltip,
    BFormRating,
} from "bootstrap-vue";
import axios from "axios";
import Vue from "vue";
import {
    AlertCircleIcon,
    AlignJustifyIcon,
    CheckSquareIcon,
} from "vue-feather-icons";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
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
        BFormCheckbox,
        BForm,
        BButton,
        BContainer,
        BModal,
        VBModal,
        vSelect,
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
        //Datos Generales
        popPresupuesto: false,
        tituloItemPresupuestario1: "N/A",
        tituloItemPresupuestario2: "N/A",
        tituloItemPresupuestario3: "N/A",
        desLicitacion: "N/A",
        desProveedor: "N/A",
        //Select Models
        selectAnio: { id: 0, anio: "Seleccione Año" },
        selectAnioAg: { id: 0, anio: "Seleccione Año" },
        selectCodPresupuestario1: {
            id: 0,
            codItemPresupuestario: "N/A",
            tituloItemPresupuestario: "N/A",
            descripcionItemPresupuestario: "N/A",
        },
        selectCodPresupuestario2: {
            id: 0,
            codItemPresupuestario: "N/A",
            tituloItemPresupuestario: "N/A",
            descripcionItemPresupuestario: "N/A",
        },
        selectCodPresupuestario3: {
            id: 0,
            codItemPresupuestario: "N/A",
            tituloItemPresupuestario: "N/A",
            descripcionItemPresupuestario: "N/A",
        },
        selectLicitacion: { id: 0, codLicitacion: "N/A", desLicitacion: "N/A" },
        selectProveedor: { id: 0, runProveedor: "N/A", desProveedor: "N/A" },
        selectTipoServicio: { id: 0, desTipoServicios: "N/A" },
        selectUnidad: { id: 0, desUnidad: "N/A" },
        //Options - Listado Models
        listadoAnio: [],
        listadoAnioAg: [],
        listadoItemPresupuestario1: [],
        listadoItemPresupuestario2: [],
        listadoItemPresupuestario3: [],
        listadoLicitacion: [],
        listadoProveedor: [],
        listadoTipoServicio: [],
        listadoUnidad: [],
        rows: [],
        //Columns - Tabla
        columns: [
            {
                label: "Unidad",
                field: "desUnidad",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Descripcion Licitacion",
                field: "desLicitacion",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "N° Licitacion",
                field: "codLicitacion",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Item Presupuestario N°1",
                field: "codItemPresupuestario",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Item Presupuestario N°2",
                field: "codItemPresupuestario",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Item Presupuestario N°3",
                field: "codItemPresupuestario",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Nombre Proveedor",
                field: "desProveedor",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Tipo Servicio",
                field: "desTipoServicios",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Rut Proveedor",
                field: "runProveedor",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Fecha Inicio",
                field: "fechaInicio",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Fecha Termino",
                field: "fechaTermino",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Opciones",
                field: "action",
            },
        ],
        //Variable de Entorno
        localVal: process.env.MIX_APP_URL,
    }),
    methods: {
        //Listado de Datos BD
        ListadoAnio() {
            try {
                axios.get(this.localVal + "/api/GetAnio").then((res) => {
                    this.listadoAnio = res.data;
                    this.listadoAnioAg = res.data;
                });
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
        ListadosLicitaciones() {
            try {
                axios.get(this.localVal + "/api/GetLicitacion").then((res) => {
                    this.listadoLicitacion = res.data;
                });
            } catch (error) {
                console.log(error);
            }
        },
        ListadoItemsPresupuestarios() {
            try {
                axios
                    .get(this.localVal + "/api/GetItemPresupuestario")
                    .then((res) => {
                        this.listadoItemPresupuestario1 = res.data;
                        this.listadoItemPresupuestario2 = res.data;
                        this.listadoItemPresupuestario3 = res.data;
                    });
            } catch (error) {
                console.log(error);
            }
        },
        ListadoTipoServicio() {
            try {
                axios
                    .get(this.localVal + "/api/GetTipoServicio")
                    .then((res) => {
                        this.listadoTipoServicio = res.data;
                    });
            } catch (error) {
                console.log(error);
            }
        },
        ListadoUnidades() {
            try {
                axios.get(this.localVal + "/api/GetUnidades").then((res) => {
                    this.listadoUnidad = res.data;
                });
            } catch (error) {
                console.log(error);
            }
        },
        //Ver Dato Seleccionado
        setItemPresupuestario1() {
            try {
                this.tituloItemPresupuestario1 =
                    this.selectCodPresupuestario1.tituloItemPresupuestario;
            } catch (error) {
                console.log(error);
            }
        },
        setItemPresupuestario2() {
            try {
                this.tituloItemPresupuestario2 =
                    this.selectCodPresupuestario2.tituloItemPresupuestario;
            } catch (error) {
                console.log(error);
            }
        },
        setItemPresupuestario3() {
            try {
                this.tituloItemPresupuestario3 =
                    this.selectCodPresupuestario3.tituloItemPresupuestario;
            } catch (error) {
                console.log(error);
            }
        },
        setLicitacion() {
            try {
                this.desLicitacion = this.selectLicitacion.desLicitacion;
            } catch (error) {
                console.log(error);
            }
        },
        setProveedor() {
            try {
                this.desProveedor = this.selectProveedor.desProveedor;
            } catch (error) {
                console.log(error);
            }
        },
        //Agregar Datos BD
        AgregarPresupuesto() {
            try {
            } catch (error) {
                console.log(error);
            }
        },
        CargarPorAnio() {
            try {
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
        this.ListadoTipoServicio();
        this.ListadoUnidades();
    },
};
</script>
