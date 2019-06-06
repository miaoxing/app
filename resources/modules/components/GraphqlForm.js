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

@withRouter
export default class extends React.Component {
  render() {
    return (
      <Query
        query={this.props.query}
        variables={this.props.variables}
      >
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
                initialValues={Object.values(data)[0]}
                enableReinitialize={true}
                onSubmit={(values) => {
                  mutate({variables: {input: values}}).then(({data}) => {
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
      </Query>
    );
  }
}
