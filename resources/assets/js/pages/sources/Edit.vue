<template>

    <div class="columns is-centered">
        <div class="column is-three-quarters animated fadeIn">
            <vue-form-ss class="box animated fadeIn"
                :route-params="[$route.name, $route.params.id, false]"
                @loaded="initialised = true"
                ref="form"/>
            <div v-if="initialised">
                <comments-card :id="$route.params.id"
                               type="family"
                               :open="true"/>
            </div>
        </div>
    </div>

</template>

<script>

import DocumentsCard from '../../components/enso/documents/DocumentsCard.vue';
import CommentsCard from '../../components/enso/comments/CommentsCard.vue';
import Contacts from '../../components/enso/contacts/Contacts.vue';
import Addresses from '../../components/enso/addresses/Addresses.vue';
import VueFormSs from '../../components/enso/vueforms/VueFormSs.vue';

export default {
    components: {
        CommentsCard, VueFormSs,
    },

    data() {
        return {
            initialised: false,
        };
    },
};

</script>
