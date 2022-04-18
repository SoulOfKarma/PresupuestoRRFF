<template>
    <div>
        <b-row>
            <b-col>
                <b-button
                    md="12"
                    v-ripple.400="'rgba(255, 255, 255, 0.15)'"
                    variant="primary"
                    v-b-modal.modal-primary
                >
                    Crear Nueva Encuesta
                </b-button>
            </b-col>
        </b-row>
        <br />
        <b-row>
            <b-col>
                <b-card title="Listado Encuestas Creadas">
                    <vue-good-table
                        :columns="columns"
                        :rows="rows"
                        theme="nocturnal"
                    >
                        <template slot="table-row" slot-scope="props">
                            <span v-if="props.column.field === 'action'">
                                <alert-circle-icon
                                    v-b-tooltip.hover.top="'Agregar Preguntas'"
                                    size="1.5x"
                                    class="custom-class"
                                    @click="popAgregarPreguntas(props.row.id)"
                                ></alert-circle-icon>
                                <align-justify-icon
                                    v-b-tooltip.hover.top="
                                        'Listado Preguntas Encuesta'
                                    "
                                    size="1.5x"
                                    class="custom-class"
                                    @click="popListadoPreguntas(props.row.id)"
                                >
                                </align-justify-icon>
                                <check-square-icon
                                    v-b-tooltip.hover.top="
                                        'Probar Encuesta Local'
                                    "
                                    size="1.5x"
                                    class="custom-class"
                                    @click="
                                        popPruebaEncuestaLocal(props.row.id)
                                    "
                                ></check-square-icon>
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
                title="Nueva Encuesta"
                hide-footer
            >
                <b-form-group>
                    <label for="InputHelp">Detalle Encuesta</label>
                    <small class="text-muted">
                        Ej. <i>Encuesta Articulos</i></small
                    >
                    <b-form-input id="InputHelp" v-model="name" />
                    <b-row>
                        <b-col>
                            <b-button
                                class="mt-3"
                                block
                                @click="$bvModal.hide('modal-primary')"
                                >Cerrar</b-button
                            >
                        </b-col>
                        <b-col>
                            <b-button class="mt-3" block @click="handleSubmit()"
                                >Guardar</b-button
                            >
                        </b-col>
                    </b-row>
                </b-form-group>
            </b-modal>
        </b-row>
        <b-row>
            <b-modal
                ref="agPregunta"
                modal-class="modal-primary"
                centered
                title="Nueva Pregunta de la encuesta"
                hide-footer
            >
                <b-form-group>
                    <label for="InputHelp">Ingrese Pregunta</label>
                    <small class="text-muted">
                        Ej.
                        <i
                            >De 1 a 5 Estrellas, que Opina sobre la encuesta</i
                        ></small
                    >
                    <b-form-input id="InputHelp" v-model="pregunta" />
                    <b-row>
                        <b-col>
                            <b-button
                                class="mt-3"
                                block
                                @click="cerrarPopAgregar()"
                                >Cerrar</b-button
                            >
                        </b-col>
                        <b-col>
                            <b-button
                                class="mt-3"
                                block
                                @click="agregarPregunta()"
                                >Guardar</b-button
                            >
                        </b-col>
                    </b-row>
                </b-form-group>
            </b-modal>
        </b-row>
        <b-row>
            <b-modal
                ref="agListadoPregunta"
                modal-class="modal-primary"
                centered
                title="Nueva Pregunta de la encuesta"
                hide-footer
            >
                <b-card title="Listado Encuestas Creadas">
                    <vue-good-table
                        :columns="columnaPregunta"
                        :rows="rowsPregunta"
                        theme="nocturnal"
                    >
                        <template slot="table-row" slot-scope="props">
                            <span v-if="props.column.field === 'action'">
                            </span>
                            <span v-else>
                                {{ props.formattedRow[props.column.field] }}
                            </span>
                        </template>
                    </vue-good-table>
                </b-card>
            </b-modal>
        </b-row>
        <b-row>
            <b-modal
                ref="PEncuesta"
                modal-class="modal-primary"
                centered
                title="Prueba de Encuesta"
                hide-footer
            >
                <b-card :key="indextr" v-for="(tr, indextr) in rowsPregunta">
                    <b-card-text>{{
                        rowsPregunta[indextr].pregunta
                    }}</b-card-text>
                    <b-form-rating
                        no-border
                        v-model="rowsPregunta[indextr].puntaje"
                        variant="warning"
                    />
                    <p class="mt-1">
                        Value: {{ rowsPregunta[indextr].puntaje }}
                    </p>
                </b-card>
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
import Vue from "vue";
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
        BFormCheckbox,
        BForm,
        BButton,
        BContainer,
        BModal,
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
        value: null,
        columns: [
            {
                label: "ID",
                field: "id",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Encuesta",
                field: "nombreEncuesta",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Opciones",
                field: "action",
            },
        ],
        columnaPregunta: [
            {
                label: "ID",
                field: "id",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Encuesta",
                field: "idEncuesta",
                filterOptions: {
                    enabled: true,
                },
            },
            {
                label: "Preguntas",
                field: "pregunta",
                filterOptions: {
                    enabled: true,
                },
            },
        ],
        rows: [],
        rowsPregunta: [],
        listadoPreguntas: [],
        name: "",
        pregunta: "",
        idPrueba: 0,
        idEncuesta: 0,
        idItem: 0,
    }),
    methods: {
        handleSubmit() {
            this.idPrueba = this.idPrueba + 1;
            this.rows.push({
                id: this.idPrueba,
                nombreEncuesta: this.name,
            });
            this.$nextTick(() => {
                this.$bvModal.hide("modal-prevent-closing");
            });
        },
        popAgregarPreguntas(id) {
            try {
                this.$refs["agPregunta"].show();
                this.idItem = id;
            } catch (error) {
                console.log(error);
            }
        },
        cerrarPopAgregar() {
            try {
                this.$refs["agPregunta"].hide();
            } catch (error) {
                console.log(error);
            }
        },
        popListadoPreguntas(id) {
            try {
                this.rowsPregunta = [];
                this.$refs["agListadoPregunta"].show();
                this.listadoPreguntas.forEach((value, index) => {
                    if (id == value.idEncuesta) {
                        this.rowsPregunta.push(value);
                    }
                });
            } catch (error) {
                console.log(error);
            }
        },
        popPruebaEncuestaLocal(id) {
            try {
                this.rowsPregunta = [];
                this.$refs["PEncuesta"].show();
                this.listadoPreguntas.forEach((value, index) => {
                    if (id == value.idEncuesta) {
                        value.rowcount = value.rowcount + 1;
                        this.rowsPregunta.push(value);
                        console.log(this.rowsPregunta);
                    }
                });
            } catch (error) {
                console.log(error);
            }
        },
        agregarPregunta() {
            try {
                this.idEncuesta = this.idEncuesta + 1;
                this.listadoPreguntas.push({
                    id: this.idEncuesta,
                    idEncuesta: this.idItem,
                    pregunta: this.pregunta,
                    puntaje: 0,
                    rowcount: 0,
                });
            } catch (error) {
                console.log(error);
            }
        },
    },
};
</script>

<style></style>
