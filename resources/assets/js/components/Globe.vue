<template>
    <div class="Globe"
        v-bind:width="width"
        v-bind:height="height"></div>
</template>

<style lang="scss">
    .Globe {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 100;
    }
</style>

<script>
    import * as THREE from 'three';

    export default {
        data() {
            return {
                width: 600,
                height: 600,
                scene: null,
                camera: null,
                renderer: null
            };
        },

        mounted() {
            this.scene = new THREE.Scene();

            this.camera = new THREE.PerspectiveCamera(75, this.width / this.height, 0.1, 1000);
            this.camera.position.z = 20;

            this.renderer = new THREE.WebGLRenderer({ alpha: true });
            this.renderer.setSize(this.width, this.height);

            this.populateScene();
            this.render();

            document.querySelector('.Globe').appendChild(this.renderer.domElement);
        },

        methods: {
            populateScene() {
                const geometry = new THREE.SphereGeometry(5, 32, 32);
                const material = new THREE.MeshBasicMaterial({ color: 0xffffff });
                const sphere = new THREE.Mesh(geometry, material);
                sphere.name = 'sphere';
                sphere.material = new THREE.MeshPhongMaterial({
                    color: 0xf3eef3,
                    specular: 0xff0000,
                    shininess: 0.4
                });

                this.scene.add(sphere);


                var lights = [];
                lights[ 0 ] = new THREE.PointLight( 0xffffff, 0.5, 0 );
                lights[ 0 ].position.set( 100, 100, 40 );
                this.scene.add( lights[ 0 ] );
            },

            render() {
                requestAnimationFrame(this.render.bind(this));

                const sphere = this.scene.getObjectByName('sphere');
                sphere.rotation.x += 0.01;

                this.renderer.render(this.scene, this.camera);
            }
        }
    }
</script>
