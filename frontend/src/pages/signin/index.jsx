import React from "react";
import Button from "../../components/Button";
import Card from "../../components/Card";
import Input from "../../components/Input";
import axios from "axios";
import { useNavigate } from "react-router-dom";

function SignIn() {
  const navigate = useNavigate();
  const [email, setEmail] = React.useState("");
  const [password, setPassword] = React.useState("");
  const handleSubmit = async () => {
    try {
      axios
        .post("/api/login", {
          email,
          password,
        })
        .then(() => {
          navigate("/");
        });
    } catch (error) {
      console.error("Sign-in error:", error);
    }
  };
  return (
    <div>
      <Card className="max-w-md mx-auto mt-10 p-6">
        <h2 className="text-2xl font-bold mb-4">Sign In</h2>
        <Input
          label="Email"
          type="email"
          name="email"
          value={email}
          onChange={(e) => setEmail(e.target.value)}
        />
        <Input
          label="Password"
          type="password"
          name="password"
          value={password}
          onChange={(e) => setPassword(e.target.value)}
        />
        <Button
          variant="primary"
          size="medium"
          className="mt-4"
          type="submit"
          onClick={handleSubmit}
        >
          Sign In
        </Button>
      </Card>
    </div>
  );
}

export default SignIn;
