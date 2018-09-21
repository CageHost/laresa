<template>
    <div class="v-file" @click='pickFile'>
        <img :src="imageUrl" height="150" v-if="imageUrl"/>
        <v-text-field readonly disabled outline label="Your Fighting Banner"
        v-model='imageName'
        prepend-inner-icon='attach_file'>
        </v-text-field>
        <input
        type="file"
        style="display: none"
        ref="image"
        accept="image/*"
        @change="onFilePicked"
        >
    </div>
</template>

<script>
  export default {
    name: 'v-file',
    data: () => ({
        title: "Image Upload",
        dialog: false,
		imageName: '',
		imageUrl: '',
		imageFile: ''
    }),

    methods: {
        pickFile () {
            this.$refs.image.click ()
        },

		onFilePicked (e) {
			const files = e.target.files
			if(files[0] !== undefined) {
				this.imageName = files[0].name
				if(this.imageName.lastIndexOf('.') <= 0) {
					return
				}
				const fr = new FileReader ()
				fr.readAsDataURL(files[0])
				fr.addEventListener('load', () => {
					this.imageUrl = fr.result
					this.imageFile = files[0] // this is an image file that can be sent to server...
				})
			} else {
				this.imageName = ''
				this.imageFile = ''
				this.imageUrl = ''
			}
		}
    }
  }
</script>

<style>
    .v-file input, .v-file label{
        cursor: pointer !important;
    }
</style>
