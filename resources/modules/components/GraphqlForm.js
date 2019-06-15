import React from "react";
import gql from "graphql-tag";
import app from "app";
import {Mutation} from "react-apollo";
import {Form, Formik} from "formik";
import FormItem from "components/FormItem";
import Field from "components/Field";
import FormAction from "components/FormAction";
import Query from "components/Query";
import LoadingOverlay from 'react-loading-overlay';
import {withRouter} from "react-router";

const EditQuery = (props) => {
  if (props.query) {
    return <Query
      query={props.query}
      variables={props.variables}
    >
      {props.children}
    </Query>
  }

  return props.children({data: {}, loading: false});
};

@withRouter
export default class extends React.Component {
  /**
   * 将输入项的值从 null 转换为空字符,因为 React input 值不允许为 null
   *
   * @param object data
   * @returns object
   */
  filterValues(data) {
    if (!data) {
      return {};
    }
    Object.keys(data).forEach(key => {
      if (data[key] === null) {
        data[key] = '';
      }
    });
    return data;
  }

  render() {
    return (
      <EditQuery {...this.props}>
        {({data, loading}) => (
          <Mutation
            mutation={this.props.mutation}
          >{(mutate, {loading: mutationLoading}) => {
            return <LoadingOverlay
              active={loading || mutationLoading}
              spinner
              text='Loading...'
            >
              <Formik
                initialValues={this.filterValues(Object.values(data)[0])}
                enableReinitialize={true}
                onSubmit={(values) => {
                  if (this.props.beforeSubmit) {
                    this.props.beforeSubmit(values);
                  }
                  mutate({variables: {data: values}}).then(({data}) => {
                    app.suc('操作成功').then(() => {
                      this.props.history.push(app.curIndexUrl());
                    });
                  });
                }}
              >
                <Form>
                  {this.props.children}
                </Form>
              </Formik>
            </LoadingOverlay>
          }}
          </Mutation>
        )}
      </EditQuery>
    );
  }
}
