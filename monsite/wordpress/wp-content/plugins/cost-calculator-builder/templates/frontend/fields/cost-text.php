<div class="calc-item" v-if="Object.keys($store.getters.getCustomStyles).length" :class="textField.additionalStyles" :data-id="'id_for_label_' + textField._id">
    <div class="calc-item__title" :style="$store.getters.getCustomStyles['labels']">
        <span>{{ textField.label }}</span>
    </div>
    <textarea :id="labelId" :placeholder="textField.placeholder" class="calc-textarea" :style="$store.getters.getCustomStyles['text-area']"></textarea>
</div>
