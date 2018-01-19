import { OnInit } from '@angular/core/src/metadata/lifecycle_hooks';
import { Component } from '@angular/core';
import { HttpClient  } from '@angular/common/http';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-root',
  template: `
    <!--The content below is only a placeholder and can be replaced.-->
    <div style="text-align:center; width: 600px; margin: 0 auto;">

      <div>
        <form [formGroup]="rForm" (ngSubmit)="onSubmit(rForm.value)">
          <div class="form-container">
            <div class="row columns">
              <h1>Hackathon Api Tester</h1>
              <table style="width: 100%; text-align:left;" >
                <tr>
                  <td>Gender</td>
                  <td>
                    <select formControlName="gender">
                      <option value="M">Male</option>
                      <option value="F">Female</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Date of birth</td>
                  <td>
                    <input type="text" formControlName="dob"/>
                  </td>
                </tr>
                <tr>
                  <td>Marital Status</td>
                  <td>
                    <select formControlName="family">
                      <option value="S">Single</option>
                      <option value="C">In Couple</option>
                      <option value="F">Family with 1 children</option>
                      <option value="L">Family 2 childrens or more</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>What is your average usage?</td>
                  <td>
                    <select formControlName="usage">
                      <option value="C">Daily Commuting</option>
                      <option value="W">Weekend Getaway</option>
                      <option value="T">Transporting peoples or goods</option>
                      <option value="S">Sports Weekend</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td>What is your favorite environement?</td>
                  <td>
                    <select formControlName="environment">
                      <option value="C">City</option>
                      <option value="Y">Country</option>
                      <option value="W">Wilderness</option>
                    </select>
                  </td>
                </tr>
            
                <tr>
                  <td>What are you doing in life?</td>
                  <td>
                    <select formControlName="career">
                      <option value="S">Student</option>
                      <option value="H">Stay-at-home</option>
                      <option value="E">Employee</option>
                      <option value="P">Professional</option>
                      <option value="R">Retired</option>
                      
                    </select>
                  </td>
                </tr>

                <tr *ngIf="rForm.controls.usage.value=='T'">
                  <td>What kind of goods are you transporting?</td>
                  <td>
                    <select formControlName="goods">
                      <option value="P">Peoples, Taxi</option>
                      <option value="F">Food</option>
                      <option value="S">Small packages, courrier</option>
                      <option value="M">Materials</option>
                      <option value="V">Vehicles</option>
                    </select>
                  </td>
                </tr>

              </table>
             
              <br/><br/><br/>
              <input type="submit" class="button expanded" value="Submit Form" [disabled]="!rForm.valid">
            </div>
          </div>
        </form>
      </div>

      <div *ngIf="results">
        <h1>Results</h1>
        <pre style="text-align:left">{{results | json}}</pre>
      </div>
    </div>
  `
})
export class AppComponent implements OnInit {
  title = 'app';
  
  rForm: FormGroup;
  results; 

  constructor(private _http: HttpClient, private fb: FormBuilder){
    this.rForm = fb.group({
      'usage': [null, Validators.required],
      'environment': [null, Validators.required],
      'career': [null, Validators.required],
      'family': [null, Validators.required],
      'gender': [null, Validators.required],
      'dob': [null, Validators.required],
      'goods' : [null]
    });
  }

  ngOnInit() {}

  onSubmit(formData) {
    this._http.post('http://hackathon.sebdevlab.com?key=absdc', formData).subscribe(data => {
      console.log('data111', data);
      this.results = data.results.data;
    })
  }


}
