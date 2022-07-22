<div class="container bootstrap snippets bootdey user-info">
    <div class="panel-body inf-content">
        <div class="row">
            <div class="col-md-4 img-profil">
                <figure>
                    <img alt="Avatar utilisateur" title="Avatar" class="img-circle image-user" src="{{ $image }}" id="file-ip-1-preview">
                    <figcaption>
                        <form action="{{ $route }}" method="post" class="col-md-6 form-file d-inline" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <input type="file" name="image" id="file" class="inputfile"  onchange="showPreview(event);"/>
                            <label for="file" class="btn btn-success label-file" id="btn-change-img">Changer d'avatar</label>
                            <input type="hidden" name="user" value="{{ $name }}">
                            <button type="submit" class="btn btn-success btn-valid-img" id="btn-valid-img">Valider</button>
                        </form>  
                    </figcaption>
                </figure>                   
            </div>
            <div class="col-md-6">
                <strong>Information</strong><br>
                <div class="table-responsive">
                <table class="table table-user-information">
                    <tbody>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                    Nom d'utilisateur                                             
                                </strong>
                            </td>
                            <td class="text-primary">
                                <span  class="user-detail">{{ $name }}</span>
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                    Role                                             
                                </strong>
                            </td>
                            <td class="text-primary">
                                <span  class="user-detail">{{ $role }}</span>
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                    E-mail                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                <span  class="user-detail">{{ $email }}</span>
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                                    Crée le                                                 
                                </strong>
                            </td>
                            <td class="text-primary">
                                <span  class="user-detail">{{ $createdAt }}</span>
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                                    Modifié le                                                 
                                </strong>
                            </td>
                            <td class="text-primary">
                                 <span class="user-detail">{{ __('Aucune modifiation effectué') }}</span> 
                            </td>
                        </tr>
                        @if (!empty(Auth::user()->role_id) && Auth::user()->role_id == 1 && Str::contains(request()->url(),'Admin'))
                            <tr>    
                                <td>
                                    <strong>
                                    <span class="glyphicon glyphicon-calendar">{{ __('Gestion') }}</span> 
                                    </strong>
                                </td>
                                
                                <td>
                                    <span class="user-detail"><a href="{{ route('back-office') }}">{{ __('Back office') }}</a> </span> 
                                </td>
                            </tr> 
                        @endif                                                           
                    </tbody>
                </table>
                @if (!empty(Auth::user()->role_id) && Auth::user()->role_id == 1)
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Modifier les infos
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Profil</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <td class="text-primary">
                                <form action="{{ route('modifyRole',[$idUser,$name]) }}" method="post" id="form-role">
                                @csrf
                                <label for="role">Changer le role</label>
                                <select name="role" id="">
                                    <option value="1">admin</option>
                                    <option value="2">modérateurs</option>
                                    <option value="3">membres</option>
                                </select>
                            </td>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                          <button type="submit" class="btn btn-success">Valider les modifications</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endif
                </div>
            </div>
        </div>
        @if ($errors->all())
            <div class="alert alert-danger mt-2"> 
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach

            </div>
        @endif
    </div>
</div>      




