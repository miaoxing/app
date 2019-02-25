import React from 'react';
import app from "app";
import FormItem from "components/FormItem";
import Options from "components/Options";
import {connect, getIn} from "formik";

class AreaCascading extends React.Component {
  static defaultProps = {
    provinceName: 'province',
    cityName: 'city',
    areaName: 'area',
    required: true,
    component: FormItem,
  };

  state = {
    provinces: [],
    cities: [],
    areas: [],
  };

  componentDidMount() {
    this.get().then(ret => this.setState({provinces: ret.data}, () => {
      const province = getIn(this.props.formik.values, this.props.provinceName);
      if (province) {
        this.loadCities(province, () => {
          const city = getIn(this.props.formik.values, this.props.cityName);
          if (city) {
            this.loadAreas(city);
          }
        });
      }
    }));
  }

  handleChangeProvince = (e) => {
    this.props.formik.handleChange(e);
    this.props.formik.setFieldValue(this.props.cityName, '');
    this.props.formik.setFieldValue(this.props.areaName, '');
    this.loadCities(e.target.value);
  };

  handleChangeCity = (e) => {
    this.props.formik.handleChange(e);
    this.props.formik.setFieldValue(this.props.areaName, '');
    this.loadAreas(e.target.value);
  };

  loadCities(province, cb) {
    return this.get(this.getParentId('provinces', province)).then(ret => {
      this.setState({cities: ret.data, areas: []}, cb);
    });
  }

  loadAreas(city, cb) {
    return this.get(this.getParentId('cities', city)).then(ret => {
      this.setState({areas: ret.data}, cb);
    });
  }

  getParentId(types, name) {
    let parentId;
    this.state[types].forEach(item => {
      if (item.label === name) {
        parentId = item.value;
        return false;
      }
    });
    return parentId;
  }

  get(value = '') {
    return app.get(app.url('areas.json', {parentId: value}));
  }

  render() {
    return <>
      <this.props.component label="省份" name={this.props.provinceName} required={this.props.required}
        onChange={this.handleChangeProvince}>
        <Options data={this.state.provinces} valueKey="label"/>
      </this.props.component>

      <this.props.component label="城市" name={this.props.cityName} required={this.props.required}
        onChange={this.handleChangeCity}>
        <Options data={this.state.cities} valueKey="label"/>
      </this.props.component>

      <this.props.component label="区域" name={this.props.areaName} required={this.props.required}>
        <Options data={this.state.areas} valueKey="label"/>
      </this.props.component>
    </>
  }
}

export default connect(AreaCascading);
