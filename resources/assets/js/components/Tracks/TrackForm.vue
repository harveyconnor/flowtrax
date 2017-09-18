<template>
    <div class="container">
        <form @submit.prevent="submitForm">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label :class="errors.first_name ? 'text-danger' : ''" for="first_name">
                            First Name<sup class="text-danger">*</sup>
                        </label>
                        <div class="input-group">
                            <span class="input-group-addon" :class="errors.first_name ? 'form-error-group' : ''"><i
                                    class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="first_name"
                                   placeholder="Enter first name"
                                   :class="errors.first_name ? 'form-error' : ''"
                                   v-model="form.first_name" @keydown="errors.first_name = ''">
                        </div>
                        <div v-if="errors.first_name" class="text-danger">
                            <ul class="fa-ul mt-2">
                                <li v-for="error in errors.first_name">
                                    <i class="fa-li fa fa-exclamation-circle"></i> {{ error }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label :class="errors.last_name ? 'text-danger' : ''" for="last_name">Last Name<sup
                                class="text-danger">*</sup></label>
                        <div class="input-group">
                            <span class="input-group-addon" :class="errors.last_name ? 'form-error-group' : ''"><i
                                    class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="last_name"
                                   placeholder="Enter last name"
                                   :class="errors.last_name ? 'form-error' : ''"
                                   v-model="form.last_name" @keydown="errors.last_name = ''">
                        </div>
                        <div v-if="errors.last_name" class="text-danger">
                            <ul class="fa-ul mt-2">
                                <li v-for="error in errors.last_name">
                                    <i class="fa-li fa fa-exclamation-circle"></i> {{ error }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label :class="errors.email ? 'text-danger' : ''" for="email">Email<sup
                        class="text-danger">*</sup></label>
                <div class="input-group">
                    <span class="input-group-addon" :class="errors.email ? 'form-error-group' : ''"><i
                            class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                           :class="errors.email ? 'form-error' : ''"
                           v-model="form.email" @keydown="errors.email = ''">
                </div>
                <div v-if="errors.email" class="text-danger">
                    <ul class="fa-ul mt-2">
                        <li v-for="error in errors.email">
                            <i class="fa-li fa fa-exclamation-circle"></i> {{ error }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label :class="errors.artist ? 'text-danger' : ''" for="artist">Artist Name<sup
                                class="text-danger">*</sup></label>
                        <div class="input-group">
                            <span class="input-group-addon soundcloud" :class="errors.artist ? 'form-error-group' : ''"><i
                                    class="fa fa-headphones"></i></span>
                            <input type="text" class="form-control" id="artist"
                                   placeholder="Enter artist name"
                                   :class="errors.artist ? 'form-error' : ''"
                                   v-model="form.artist" @keydown="errors.artist = ''">
                        </div>
                    </div>
                    <div v-if="errors.artist" class="text-danger">
                        <ul class="fa-ul mt-2">
                            <li v-for="error in errors.artist">
                                <i class="fa-li fa fa-exclamation-circle"></i> {{ error }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label :class="errors.soundcloud ? 'text-danger' : ''" for="soundcloud">SoundCloud Profile<sup
                                class="text-danger">*</sup></label>
                        <div class="input-group">
                            <span class="input-group-addon soundcloud"
                                  :class="errors.soundcloud ? 'form-error-group' : ''"><i class="fa fa-soundcloud"></i></span>
                            <input type="url" class="form-control" id="soundcloud"
                                   placeholder="Enter SoundCloud profile link"
                                   :class="errors.soundcloud ? 'form-error' : ''"
                                   v-model="form.soundcloud" @keydown="errors.soundcloud = ''">
                        </div>
                        <div v-if="errors.soundcloud" class="text-danger">
                            <ul class="fa-ul mt-2">
                                <li v-for="error in errors.soundcloud">
                                    <i class="fa-li fa fa-exclamation-circle"></i> {{ error }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label :class="errors.track_title ? 'text-danger' : ''" for="track_title">Track Title<sup
                                class="text-danger">*</sup></label>
                        <div class="input-group">
                            <span class="input-group-addon soundcloud"
                                  :class="errors.track_title ? 'form-error-group' : ''"><i
                                    class="fa fa-music"></i></span>
                            <input type="text" class="form-control" id="track_title"
                                   placeholder="Enter track title"
                                   :class="errors.track_title ? 'form-error' : ''"
                                   v-model="form.track_title" @keydown="errors.track_title = ''">
                        </div>
                        <div v-if="errors.track_title" class="text-danger">
                            <ul class="fa-ul mt-2">
                                <li v-for="error in errors.track_title">
                                    <i class="fa-li fa fa-exclamation-circle"></i> {{ error }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label :class="errors.track_link ? 'text-danger' : ''" for="track_link">Track Link<sup
                                class="text-danger">*</sup></label>
                        <div class="input-group">
                            <span class="input-group-addon soundcloud"
                                  :class="errors.track_link ? 'form-error-group' : ''"><i
                                    class="fa fa-globe"></i></span>
                            <input type="url" class="form-control" id="track_link"
                                   placeholder="Enter track link"
                                   :class="errors.track_link ? 'form-error' : ''"
                                   v-model="form.track_link" @keydown="errors.track_link = ''">
                        </div>
                        <div v-if="errors.track_link" class="text-danger">
                            <ul class="fa-ul mt-2">
                                <li v-for="error in errors.track_link">
                                    <i class="fa-li fa fa-exclamation-circle"></i> {{ error }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label :class="errors.social_links ? 'text-danger' : ''" for="social_links">Social Media Links</label>
                <textarea class="form-control" id="social_links" name="social_links" rows="4"
                          :class="errors.social_links ? 'form-error' : ''"
                          placeholder="Enter any links that you would like included in the description."
                          v-model="form.social_links" @keydown="errors.social_links = ''">
                </textarea>
                <div v-if="errors.social_links" class="text-danger">
                    <ul class="fa-ul mt-2">
                        <li v-for="error in errors.social_links">
                            <i class="fa-li fa fa-exclamation-circle"></i> {{ error }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="terms" v-model="form.terms">
                    I agree to the terms and conditions.
                </label>
            </div>
            <button v-if="!form.busy" class="btn btn-primary btn-block" type="submit">
                Send Submission! <i class="fa fa-paper-plane"></i>
            </button>
            <button v-if="form.busy" class="btn btn-primary btn-block" disabled>
                <i class="fa fa-spinner fa-pulse"></i>
            </button>
        </form>
    </div>
</template>

<script>

    import Form from 'vform'

    export default {

        data() {
            return {
                // Create a new form instance
                form: new Form({
                    first_name: '',
                    last_name: '',
                    email: '',
                    artist: '',
                    soundcloud: '',
                    track_title: '',
                    track_link: '',
                    social_links: '',
                    terms: false
                }),
                errors: []
            }
        },
        methods: {
            checkTerms() {
                if (!this.form.terms) {
                    swal({
                        title: "Oops!",
                        text: "You need to agree to the terms before submitting a track.",
                        type: "error",
                        showConfirmButton: true
                    });
                    return false;
                }
                return true;
            },
            submitForm() {
                if (this.checkTerms()) {
                    this.form.post('/tracks/submit').then((res) => {

                        this.errors = '';
                        // On success we reset track details so they can submit another track.
                        this.form.track_link = '';
                        this.form.track_title = '';

                        swal({
                            title: "Success!",
                            text: "You have successfully submitted that track.",
                            type: 'success',
                            showCancelButton: true,
                            confirmButtonText: 'Submit another?',
                            cancelButtonText: 'No, exit',
                        }).then(function () {

                        }, function (dismiss) {
                            if (dismiss === 'cancel') {
                                this.form.first_name = '';
                                this.form.last_name = '';
                                this.form.email = '';
                                this.form.artist = '';
                                this.form.soundcloud = '';
                                this.form.track_title = '';
                                this.form.track_link = '';
                                this.form.social_links = '';
                                this.form.terms = false;
                            }
                        }.bind(this))

                    }, function () {

                        this.errors = this.form.errors.errors;

                        swal({
                            title: "Oops!",
                            text: "There was an error while submitting your track.",
                            type: "error",
                            timer: 2200,
                            showConfirmButton: false
                        });

                    }.bind(this));
                }
            }
        }
    }
</script>
