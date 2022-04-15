{{ dd($_FILES) }}

<div class="container bootstrap snippets bootdey user-info">
    <div class="panel-body inf-content">
        <div class="row">
            <div class="col-md-4">
                <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
               <form action="" method="post" class="col-md-6 form-file">
                <input type="file" name="image" id="file" class="inputfile" />
                <label for="file" class="btn btn-outline-secondary">Changer d'avatar</label>
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
                                    Username                                              
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $name }}
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                    Role                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                Admin
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                    Email                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $email }} 
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                                    created                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{ $createdAt }}
                            </td>
                        </tr>
                        <tr>        
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                                    Modified                                                
                                </strong>
                            </td>
                            <td class="text-primary">
                                 {{ __('Aucune modifiation effectué') }}
                            </td>
                        </tr>                                    
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </div>                                        