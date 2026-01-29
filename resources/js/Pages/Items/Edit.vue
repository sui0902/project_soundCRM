<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import InputError from '@/Components/InputError.vue';

const props = defineProps({
  item: Object,
  errors: Object
})

const form = reactive({
  id: props.item.id,
  name: props.item.name,
  memo: props.item.memo,
  price: props.item.price,
  is_selling: props.item.is_selling,
})

const updateItem = id => {
  Inertia.put(route('items.update', { item: id }), form)
}



</script>

<template>
    <Head title="商品編集" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">商品編集</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                      
                      <section class="text-gray-600 body-font relative">
                        <form action="" @submit.prevent="updateItem(form.id)">
                          <div class="container px-5 py-8 mx-auto">
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                              <div class="flex flex-wrap -m-2">
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">商品名</label>
                                    <input type="text" id="name" name="name" v-model="form.name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-cyan-500 focus:bg-white focus:ring-2 focus:ring-cyan-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <InputError :message="props.errors.name"/>
                                  </div>
                                </div>
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="memo" class="leading-7 text-sm text-gray-600">メモ</label>
                                    <textarea id="memo" name="memo" v-model="form.memo" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-cyan-500 focus:bg-white focus:ring-2 focus:ring-cyan-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                    <InputError :message="props.errors.memo"/>
                                  </div>
                                </div>
                                <div class="p-2 w-full">
                                  <div class="relative">
                                    <label for="price" class="leading-7 text-sm text-gray-600">価格</label>
                                    <input type="number" id="price" name="price" v-model="form.price" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-cyan-500 focus:bg-white focus:ring-2 focus:ring-cyan-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <InputError :message="props.errors.price"/>
                                  </div>
                                </div>
                                <div class="p-2 w-full">
                                    <label class="block leading-7 text-sm text-gray-600 mb-3">ステータス</label>
                                    <div class="flex items-center space-x-8">
                                      <div class="flex items-center">
                                        <input type="radio" id="selling" name="is_selling" v-model="form.is_selling" value="1" class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 focus:ring-cyan-500 focus:ring-2">
                                        <label for="selling" class="ml-3 text-sm font-medium text-gray-700">販売中</label>
                                      </div>
                                      <div class="flex items-center">
                                        <input type="radio" id="stopped" name="is_selling" v-model="form.is_selling" value="0" class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 focus:ring-cyan-500 focus:ring-2">
                                        <label for="stopped" class="ml-3 text-sm font-medium text-gray-700">停止中</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="p-2 w-full">
                                  <button class="flex mx-auto text-white bg-cyan-300 border-0 py-2 px-8 focus:outline-none hover:bg-cyan-500 rounded text-lg">更新する</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </section>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
