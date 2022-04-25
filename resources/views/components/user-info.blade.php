<div class="container bootstrap snippets bootdey user-info">
    <div class="panel-body inf-content">
        <div class="row">
            <div class="col-md-4">
                <img alt="" title="" class="img-circle image-user isTooltip" src="{{ $image }}">
               <form action="{{ $route }}" method="post" class="col-md-6 form-file d-inline" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" id="file" class="inputfile" />
                <label for="file" class="btn btn-outline-secondary mt-3">Changer d'avatar</label>
                <input type="hidden" name="user" value="{{ $name }}">
                <button type="submit" class="btn btn-outline-success mt-3">Valider</button>
               </form>  
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
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        @if ($errors->all())
    <div class="alert alert-danger mt-2"> 
        {{ dd($errors) }}
    </div>
    @endif
    </div>
</div>      
   
