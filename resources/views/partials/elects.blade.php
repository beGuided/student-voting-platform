
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>The <b>President</b></h3>
                            
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'President') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <p class="candidate-name">{{$candidate->candidate_name}}</p>

                                </div>

                            </div>
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>
                            <div class="candidate-select-box">
                                 <select  name="candidate_id[0]" class="candidate_select form-control" > 
                                   
                                    <option value="">Select Candidate</option> 
                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'President') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                              
                            </div>
                        </div>
                    </div>
                </div>


                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>The Vice <b>President</b></h3>

                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Vice President') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <p class="candidate-name">{{$candidate->candidate_name}}</p>

                                </div>
                               
                            </div>
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>
            
                            <div class="candidate-select-box">
                                 <select name="candidate_id[1]" class="candidate_select form-control" > 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Vice President') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                            
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>General <b>Secretary</b></h3>
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == ' General Secretary') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <p class="candidate-name">{{$candidate->candidate_name}}</p>

                                </div>

                            </div>
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>

                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id[2]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'General Secretary') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                              
                            </div>
                       
                        </div>
                    </div>
                </div>

                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>Asst. General <b>Secretary</b></h3>
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Asst. General Secretary') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <p class="candidate-name">{{$candidate->candidate_name}}</p>

                                </div>

                            </div>
                            @endif
                            @endforeach
                           
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>
                              
                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id[3]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Asst. General Secretary') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                            
                            </div>
                        </div>
                    </div>
                </div>

                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>Academic <b>Director I</b></h3>
                            
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Academic Director I') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <p class="candidate-name">{{$candidate->candidate_name}}</p>

                                </div>
                            </div>
                        
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>
                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id[4]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Academic Director I') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>Academic <b>Director II</b></h3>
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Academic Director II') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <p class="candidate-name">{{$candidate->candidate_name}}</p>

                                </div>

                            </div>
                            @else
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>

                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id[5]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Academic Director II') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                            </div>
                   

                        </div>
                    </div>
                </div>
                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>Financial <b>Secretary</b></h3>
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Financial Secretary') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <p class="candidate-name">{{$candidate->candidate_name}}</p>

                                </div>

                            </div>
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>
                              
                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id[6]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Financial Secretary') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                               
                            </div>
                    

                        </div>
                    </div>
                </div>

                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>The <b>P.R.O</b></h3>
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'P.R.O') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <p class="candidate-name">{{$candidate->candidate_name}}</p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>
                              
                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id[7]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'P.R.O') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                                
                            </div>
                    </div>
                </div>
             </div>
            
              <!-- next candidate -->
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="container">
                    <div class="voting-box">
                        <!-- Election Offie -->
                        <h3>The <b>Treasurer</b></h3>
                        @foreach ($candidates as $candidate)
                        @if($candidate->category->name == 'Treasurer') 

                        <div class="container">
                            <!-- candidate 1 -->
                            <div class="candidate">     
                                <!-- candidate image -->
                                <div class="candidate-photo">
                                    <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                </div>
                                <!-- candidate name -->
                                <p class="candidate-name">{{$candidate->candidate_name}}</p>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <!-- Candidate Selection code -->
                        <h6>Select Your <b>Candidate</b></h6>
                          
                        <div class="candidate-select-box">
                             <select id="candidate_select" name="candidate_id[8]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                               
                                <option value="">Select Candidate</option> 

                                @foreach ($candidates as $candidate)
                                @if($candidate->category->name == 'Treasurer') 

                                <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                @endif
                              @endforeach
                            </select> 
                            
                        </div>
                </div>
                </div>
             </div>
        
          <!-- next candidate -->
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="container">
                <div class="voting-box">
                    <!-- Election Offie -->
                    <h3>The <b>Sports Director</b></h3>
                    @foreach ($candidates as $candidate)
                    @if($candidate->category->name == 'Sports Director') 

                    <div class="container">
                        <!-- candidate 1 -->
                        <div class="candidate">     
                            <!-- candidate image -->
                            <div class="candidate-photo">
                                <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                            </div>
                            <!-- candidate name -->
                            <p class="candidate-name">{{$candidate->candidate_name}}</p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!-- Candidate Selection code -->
                    <h6>Select Your <b>Candidate</b></h6>
                      
                    <div class="candidate-select-box">
                         <select id="candidate_select" name="candidate_id[9]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                           
                            <option value="">Select Candidate</option> 

                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Sports Director') 

                            <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                            @endif
                          @endforeach
                        </select> 
                        
                    </div>
                    </div>
                </div>
            </div>
    

            <!-- next candidate -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="container">
            <div class="voting-box">
                <!-- Election Offie -->
                <h3>The <b>Social Director</b></h3>
                @foreach ($candidates as $candidate)
                @if($candidate->category->name == 'Social Director') 

                <div class="container">
                    <!-- candidate 1 -->
                    <div class="candidate">     
                        <!-- candidate image -->
                        <div class="candidate-photo">
                            <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                        </div>
                        <!-- candidate name -->
                        <p class="candidate-name">{{$candidate->candidate_name}}</p>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- Candidate Selection code -->
                <h6>Select Your <b>Candidate</b></h6>
                  
                <div class="candidate-select-box">
                     <select id="candidate_select" name="candidate_id[10]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                       
                        <option value="">Select Candidate</option> 

                        @foreach ($candidates as $candidate)
                        @if($candidate->category->name == 'Social Director') 

                        <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                        @endif
                      @endforeach
                    </select> 
                    
                </div>
                    </div>
                </div>
            </div>


             <!-- next candidate -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="container">
        <div class="voting-box">
            <!-- Election Offie -->
            <h3>The <b>Welfare Director</b></h3>
            @foreach ($candidates as $candidate)
            @if($candidate->category->name == 'Welfare Director') 

            <div class="container">
                <!-- candidate 1 -->
                <div class="candidate">     
                    <!-- candidate image -->
                    <div class="candidate-photo">
                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                    </div>
                    <!-- candidate name -->
                    <p class="candidate-name">{{$candidate->candidate_name}}</p>
                </div>
            </div>
            @endif
            @endforeach
            <!-- Candidate Selection code -->
            <h6>Select Your <b>Candidate</b></h6>
              
            <div class="candidate-select-box">
                 <select id="candidate_select" name="candidate_id[11]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                   
                    <option value="">Select Candidate</option> 

                    @foreach ($candidates as $candidate)
                    @if($candidate->category->name == 'Welfare Director') 

                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                    @endif
                  @endforeach
                </select> 
                
            </div>
              </div>
            </div>
            </div>

        
            
             <!-- next candidate -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="container">
            <div class="voting-box">
                <!-- Election Offie -->
                <h3> <b>DSDC Chairman</b></h3>
                @foreach ($candidates as $candidate)
                @if($candidate->category->name == 'DSDC Chairman') 
    
                <div class="container">
                    <!-- candidate 1 -->
                    <div class="candidate">     
                        <!-- candidate image -->
                        <div class="candidate-photo">
                            <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                        </div>
                        <!-- candidate name -->
                        <p class="candidate-name">{{$candidate->candidate_name}}</p>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- Candidate Selection code -->
                <h6>Select Your <b>Candidate</b></h6>
                  
                <div class="candidate-select-box">
                     <select id="candidate_select" name="candidate_id[12]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                       
                        <option value="">Select Candidate</option> 
    
                        @foreach ($candidates as $candidate)
                        @if($candidate->category->name == 'DSDC Chairman') 
    
                        <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                        @endif
                      @endforeach
                    </select> 
                    
                </div>
                  </div>
                </div>
                </div>
    
             
           
                
             <!-- next candidate -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="container">
            <div class="voting-box">
                <!-- Election Offie -->
                <h3><b>Deputy Chairman DSDC</b></h3>
                @foreach ($candidates as $candidate)
                @if($candidate->category->name == '>Deputy Chairman DSDC') 
    
                <div class="container">
                    <!-- candidate 1 -->
                    <div class="candidate">     
                        <!-- candidate image -->
                        <div class="candidate-photo">
                            <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                        </div>
                        <!-- candidate name -->
                        <p class="candidate-name">{{$candidate->candidate_name}}</p>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- Candidate Selection code -->
                <h6>Select Your <b>Candidate</b></h6>
                  
                <div class="candidate-select-box">
                     <select id="candidate_select" name="candidate_id[13]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                       
                        <option value="">Select Candidate</option> 
    
                        @foreach ($candidates as $candidate)
                        @if($candidate->category->name == '>Deputy Chairman DSDC') 
    
                        <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                        @endif
                      @endforeach
                    </select> 
                    
                </div>
                  </div>
                </div>
                </div>


                    <!-- next candidate -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="container">
            <div class="voting-box">
                <!-- Election Offie -->
                <h3> <b>P.R.O DSDC</b></h3>
                @foreach ($candidates as $candidate)
                @if($candidate->category->name == 'P.R.O DSDC') 
    
                <div class="container">
                    <!-- candidate 1 -->
                    <div class="candidate">     
                        <!-- candidate image -->
                        <div class="candidate-photo">
                            <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                        </div>
                        <!-- candidate name -->
                        <p class="candidate-name">{{$candidate->candidate_name}}</p>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- Candidate Selection code -->
                <h6>Select Your <b>Candidate</b></h6>
                  
                <div class="candidate-select-box">
                     <select id="candidate_select" name="candidate_id[14]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                       
                        <option value="">Select Candidate</option> 
    
                        @foreach ($candidates as $candidate)
                        @if($candidate->category->name == 'P.R.O DSDC') 
    
                        <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                        @endif
                      @endforeach
                    </select> 
                    
                </div>
                  </div>
                </div>
                </div>

       
    
                <div class="my-5">
                    @if($candidate->is_voted_by_auth_user())
                    <a href="#" class="btn btn-danger btn-sm"> Voted</a>    
                     @else
                     <button  type="submit" class="vote_btn btn btn-success btn-lg m-4">Submit Vote</button>
                     @endif
                </div>
           
                
     </div>