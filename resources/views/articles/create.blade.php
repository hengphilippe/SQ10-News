@extends('admin.template.main')
@section('main')
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Add new Article </h5>
								</div>
								<div class="card-body">
                                    <form method="POST" action="{{ route('save_article') }}" >
                                        @csrf
										<div class="mb-3">
											<label class="form-label">Title : </label>
											<input name="title" type="text" class="form-control" placeholder="Title">
										</div>
										<div class="mb-3">
											<label class="form-label">Content : </label>
											<textarea id="content" name="content" class="form-control" placeholder="Textarea" rows="1"></textarea>
										</div>
										<div class="mb-3">
											<label class="form-label">Category : </label>
                                            <select name="category_id" class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>  
										</div>
										<div class="mb-3">
											<label class="form-label w-100">Cover</label>
											<input type="file" name="cover">
											<small class="form-text text-muted">Example block-level help text here.</small>
										</div>
										
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>

                    <script>
                        tinymce.init({
                            selector: '#content',
                            height: 500,
                            plugins: [
                                'advlist autolink lists link image charmap print preview anchor',
                                'searchreplace visualblocks code fullscreen',
                                'insertdatetime media table paste imagetools wordcount code'
                            ],
                            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code',
                            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
                            images_upload_handler: function (blobInfo, success, failure) {
                            var xhr, formData;
                            xhr = new XMLHttpRequest();
                            xhr.withCredentials = false;
                            xhr.open('POST', "{{ route('handle_tiny_upload') }}");
                            var token = '{{ csrf_token() }}';
                            xhr.setRequestHeader("X-CSRF-Token", token);
                            xhr.onload = function() {
                                var json;
                                if (xhr.status != 200) {
                                    failure('HTTP Error: ' + xhr.status);
                                    return;
                                }
                                json = JSON.parse(xhr.responseText);

                                if (!json || typeof json.location != 'string') {
                                    failure('Invalid JSON: ' + xhr.responseText);
                                    return;
                                }
                                success(json.location);
                            };
                            formData = new FormData();
                            formData.append('file', blobInfo.blob(), blobInfo.filename());
                            xhr.send(formData);
                        }
                        });
                      </script>
@endsection